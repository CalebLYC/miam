<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RateController extends Controller
{
    public function rateResto(Request $request, $resto_id){
        $validator = Validator::make($request->all(), [
            'stars' => 'required|numeric|min:1|max:5',
            'avis' => '',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        if (!Auth::check()) {
            Log::error('Utilisateur non authentifié');
            return redirect()->back()->withErrors(['message' => 'Vous devez être connecté pour évaluer un restaurant']);
        }

        $resto = Restaurant::findOrFail($resto_id);

        Rate::create([
            'stars_number' => $request->stars,
            'user_id' => Auth::user()->id,
            'restaurant_id' => $resto->id,
        ]);

        $new_avg_stars = Rate::where('restaurant_id', $resto->id)->avg('stars_number');

        $resto->update([
            'rate_stars' => $new_avg_stars,
        ]);
        return redirect()->back()->with('success', 'Merci de nous avoir fait port de votre avis votre avis');
    }

    public function apiRestoRate($id){
        $rates = Rate::all()->where('restaurant_id', $id);
        return json_encode($rates);
    }

    public function apiUserRate($id){
        $rates = Rate::all()->where('user_id', $id);
        return json_encode($rates);
    }
}
