<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    public function manage(){
        return view('managerDashboard');
    }

    public function dashboard(){
        $restaurant = Restaurant::findOrFail(Auth::guard('resto')->user()->id);
        $restaurant->rates = Rate::all()->where('restaurant_id', $restaurant->id);
        return view('restoDashboard', ['restaurant'=>$restaurant]);
    }

    public function logToManage(){
        return view('manage');
    }

    public function logToResto(){
        return view('logToResto');
    }

    public function profile(){
        $restaurant = Restaurant::findOrFail(Auth::guard('resto')->user()->id);
        $restaurant->rates = Rate::all()->where('restaurant_id', $restaurant->id);
        return view('profile', ['restaurant'=>$restaurant]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('resto')->attempt($credentials)){
            $request->session()->put('resto_id', Auth::guard('resto')->user()->id);
            return redirect()->route('resto.dashboard');
        }else{
            return redirect()->back()->withErrors(['email'=>'Email ou mot de passe invalide'])->withInput();
        }
    }

    public function logout(Request $request){
        Auth::guard('resto')->logout();
        $request->session()->forget('resto_id');
        return redirect()->route('dashboard');
    }

    public function managerLogin(){

    }
}
