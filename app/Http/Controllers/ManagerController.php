<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manage(){
        return view('managerDashboard');
    }

    public function dashboard(){
        return view('restoDashboard');
    }

    public function logToManage(){
        return view('manage');
    }

    public function logToResto(){
        return view('logToResto');
    }

    public function profile(){
        return view('profile');
    }
}
