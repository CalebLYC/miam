<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function apiIndex(){
        $users = User::all();
        return json_encode($users);
    }

    public function apiGet($id){
        $user = User::findOrFail($id);
        return json_encode($user);
    }

    public function check(Request $request){
        $user = User::all()->where('email', $request->email)->where('password', $request->password)->first();
        if($user){
            return json_encode([
                'isAuth' => true,
                'user' => $user,
            ]);
        }
        return json_encode([
            'isAuth' => false,
        ]);
    }
}
