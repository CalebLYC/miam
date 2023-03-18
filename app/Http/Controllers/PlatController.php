<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myPlats', ['plats'=>Plat::all()->where('user_id', Auth::id())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPlat');
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
            'platName' => 'required|min:3',
            'platDescription' => 'required',
            'platPrice' => 'required|numeric',
            'platImage' => 'required|image|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('platImage')){
            $filename = time().'.'.$request->file('platImage')->extension();
            $path = $request->file('platImage')->storeAs(
                'platsImages',
                $filename,
                'public'
            );

            $plat = Plat::create([
                'nom' => $request->platName,
                'price' => $request->platPrice,
                'description' => $request->description,
            ]);

            $image = new Image();
            $image->name = $filename;
            $image->url = $path;

            $plat->image()->save($image);

            return redirect()->route('restoDashboard')->with('success', 'Nouveau plat ajouté au menu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('plat', ['plat'=>Plat::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('modifyPlat', ['plat'=>Plat::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plat = Plat::findOrFail($id);

        if($plat->image){
            Storage::delete($plat->image->url);
            $plat->image()->delete();
        }

        $plat->delete();

        return redirect()->back()->with('success', 'Plat supprimé avec succès');
    }

}
