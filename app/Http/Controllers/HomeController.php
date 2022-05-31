<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
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

        $users = User:: all();
        return view('home.landingpage',compact('users'));
        // return view('home.landingpage');
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
