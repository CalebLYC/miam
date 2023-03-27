<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Plat;
use App\Models\Rate;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin')->only(['destroy']);
        $this->middleware('authResto')->only(['edit']);
        $this->middleware('password.confirm')->only(['edit', 'destroy']);
    }
    public function index()
    {
        return view('restaurants', ['restaurants'=>Restaurant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addResto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'restoName' => 'required|min:3|max:255|unique:restaurants,nom',
            'restoEmail' => 'required|min:8|max:255|unique:restaurants,email',
            'restoPassword' => 'required|min:8|max:255',
            'restoPasswordConfirm' => 'required|min:8|max:255',
            'restoDescription' => 'required|string|min:10|max:255',
            'restoSlogan' => 'required|string|min:5',
            'restoPrice' => 'required',
            'restoLocation' => 'required',
            'restoLongitude' => 'required|numeric',
            'restoLatitude' => 'required|numeric',
            'platImage' => 'required|image|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->route('restaurants.create')->withErrors($validator)->withInput();
        }

        if($request->restoPasswordConfirm == $request->restoPassword){
            if($request->hasFile('platImage')){
                $filename = time().'.'.$request->file('platImage')->extension();
            }

            $path = $request->file('platImage')->storeAs(
                'restoImages',
                $filename,
                'public'
            );

            $resto = Restaurant::create([
                'nom' => $request->restoName,
                'email' => $request->restoEmail,
                'password' => bcrypt($request->restoPassword),
                'description' => $request->restoDescription,
                'slogan' => $request->restoSlogan,
                'median_price' => $request->restoPrice,
                'location' => $request->restoLocation,
                'longitude' => $request->restoLongitude,
                'latitude' => $request->restoLatitude,
                'user_id' => Auth::id(),
            ]);

            $image = new Image();
            $image->name = $filename;
            $image->url = $path;
            $resto->image()->save($image);


            return redirect()->route('resto.dashboard');
        }else{
            return redirect()->back()->withErrors(['passwordConfirm'=>'Les mots de passe ne correspondent pas'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('resto', [
            'restaurant'=>Restaurant::findOrFail($id),
            'plats' => Plat::all()->where('restaurant_id', $id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->rates = Rate::all()->where('restaurant_id', $restaurant->id);
        return view('modifyResto', ['restaurant'=>$restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'restoName' => 'required|min:3|max:255',
            'restoEmail' => 'required|min:8|max:255',
            'restoDescription' => 'required|string|min:10|max:255',
            'restoSlogan' => 'required|string|min:5',
            'restoPrice' => 'required',
            'restoLocation' => 'required',
            'restoLongitude' => 'required|numeric',
            'restoLatitude' => 'required|numeric',
            'platImage' => 'required|image|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('platImage')){
            $filename = time().'.'.$request->file('platImage')->extension();
        }

        $path = $request->file('platImage')->storeAs(
            'restoImages',
            $filename,
            'public'
        );

        $resto = Restaurant::findOrFail($id);

        $resto->update([
            'nom' => $request->restoName,
            'email' => $request->restoEmail,
            'description' => $request->restoDescription,
            'slogan' => $request->restoSlogan,
            'median_price' => $request->restoPrice,
            'location' => $request->restoLocation,
            'longitude' => $request->restoLongitude,
            'latitude' => $request->restoLatitude,
            'user_id' => Auth::id(),
        ]);

        if($resto->image){
            Storage::delete($resto->image->url);
            $resto->image()->delete();
        }

            $resto->image()->update([
                'name' => $filename,
                'url' => $path,
            ]);


            //dd($request);
            return redirect()->route('resto.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resto = Restaurant::findOrFail($id);

        if($resto->image){
            Storage::delete($resto->image->url);
            $resto->image()->delete();
        }

        $resto->delete();

        return redirect()->back()->with('success', 'Restaurant supprimé avec succès');
    }

    public function manageResto(){
        return view('allRestos', ['restaurants'=>Restaurant::all()]);
    }

    public function apiIndex(){
        $restaurants = Restaurant::all();
        return json_encode($restaurants);
    }

    public function apiShow($id){
        $restaurant = Restaurant::findOrFail($id);
        return json_encode($restaurant);
    }
}
