<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Server;
use App\Models\Interest;
class HomeController extends Controller
{
    
    function LandingPage(){
        // $users = User::all();
        $user_count = User:: all()->count();
        $server_count = Server:: all()->count();
        $interests = Interest:: all();
        return view('home.landingpage',compact('user_count','server_count','interests'));
    }


    function AboutUs(){
        $interests = Interest:: all();
        return view('home.aboutus',compact('user_count','server_count','interests'));
    }


    function Cookie(){
        $interests = Interest:: all();
        return view('home.cookie',compact('user_count','server_count','interests'));
    }


    function HelpAndSupport(){
        $interests = Interest:: all();
        return view('home.helpandsupport',compact('user_count','server_count','interests'));
    }


    function PrivacyPolicy(){
        $interests = Interest:: all();
        return view('home.privacypolicy',compact('user_count','server_count','interests'));
    }

    function TermsAndCondition(){
        $interests = Interest:: all();
        return view('home.termsandconditions',compact('user_count','server_count','interests'));
    }
}
