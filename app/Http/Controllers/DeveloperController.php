<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{

    function CmsLogin(){
        
        
        return view('developer.developer_login');
    }


    function CmsLoginCheck(Request $request){

     if($request->input('developer_uname') == "user123" && ($request->input('developer_password') == "password123")){
        setcookie('cookie_developer', $request->input('developer_uname'), time() + (86400 * 90), "/");
            return redirect(route('developer.dashboard'));
        }
        else{
            
            $dev_err_login="Wrong UserName or Password";
            return view('developer.developer_login',compact('dev_err_login'));
        }
        return view('developer.developer_login',compact('dev_err_login'));
    }


    function CmsSignOut(){
        unset($_COOKIE['cookie_developer']);
        setcookie("cookie_developer", "", time()-3600);
        return redirect(route('developer.login'));

    }



    function CMSDashboard(){
        
        return view('developer/developer_dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
