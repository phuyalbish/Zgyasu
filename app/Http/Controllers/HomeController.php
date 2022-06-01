<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Server;
class HomeController extends Controller
{
    
    function AboutUs(){
        return view('home.aboutus');
    }
    function Cookie(){
        return view('home.cookie');
    }
    function HelpAndSupport(){
        return view('home.helpandsupport');
    }
    function LandingPage(){

        $user_count = User:: all()->count();
        $server_count = Server:: all()->count();

        return view('home.landingpage',compact('user_count','server_count'));
    }
    function PrivacyPolicy(){
        return view('home.privacypolicy');
    }
    function SignInUp(){ 
        //dd(Auth::user());

        $users = User:: all();
        return view('home.signinup',compact('users'));
        
        
    }
    function TermsAndCondition(){
        return view('home.termsandconditions');
    }
}
