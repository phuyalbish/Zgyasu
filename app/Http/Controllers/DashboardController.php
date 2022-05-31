<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function DashboardHome(){
        return view('dashboard.home');
    }
}
