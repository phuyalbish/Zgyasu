<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// For Home route

Route::get('landingpage', [HomeController::class,'LandingPage'])->name('home.landingpage');
Route::get('/', [HomeController::class,'LandingPage'])->name('home.landingpage');
Route::get('aboutus', [HomeController::class,'AboutUs'])->name('home.aboutus');
Route::get('cookie', [HomeController::class,'Cookie'])->name('home.cookie');
Route::get('helpandsupport', [HomeController::class,'HelpAndSupport'])->name('home.helpandsupport');
Route::get('privacypolicy', [HomeController::class,'PrivacyPolicy'])->name('home.privacypolicy');
Route::get('termsandcondition', [HomeController::class,'TermsAndCondition'])->name('home.termsandcondition');


Route::post('register', [UserController::class,'store'])->name('register.store');
Route::get('login', [UserController::class,'login'])->name('loginCheck');



//For Dashboard
Route::prefix('dashboard')->middleware('ChecktheCookie')->group(function(){

    Route::get('/home', [DashboardController::class,'DashboardHome'])->name('dashboard.home');
});

//For Developer
Route::prefix('developer')->middleware('ChecktheDeveloper')->group(function(){

    Route::get('dashboard', [DeveloperController::class,'CMSDashboard'])->name('developer.dashboard');

});

Route::prefix('developer')->middleware('ChecktheDeveloperDashboard')->group(function(){
    Route::get('login', [DeveloperController::class,'CmsLogin'])->name('developer.login');
});

Route::get('signout', [DeveloperController::class,'CmsSignOut'])->name('developer.signout');
Route::post('developer/loginCheck', [DeveloperController::class,'CmsLoginCheck'])->name('developer.loginCheck');

