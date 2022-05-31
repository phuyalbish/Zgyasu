<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'user_username' => 'required||unique:users,user_username',
            'user_fname' => 'required',
            'user_email' => 'unique:users,user_email',
            'user_password' => 'required',
            'user_bio' => 'required',
        ]);
        
        $userStore=new User();
        $userStore->user_username=$request->user_username;
        $userStore->user_fname=$request->user_fname;
        $userStore->user_email=$request->user_email;
        $userStore->user_bio=$request->user_bio;
        $userStore->user_password= Crypt::encrypt($request->user_password);
        $userStore->save();
        // Mail::to($userStore->email)->send(new RegisterNotification());
        setcookie('cookie_user', $request->user_username, time() + (86400 * 90), "/");
        return redirect(route('dashboard.home',compact('userStore')));
       
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




    
    public function login(Request $request)
    {
            

            $user = User::where('user_username',$request->input('user_username'))->get();

            if(isset($user[0])){
                if(Crypt::decrypt($user[0]->user_password) == $request->input('user_password')){
                setcookie('cookie_user', $request->input('user_username'), time() + (86400 * 90), "/");
                return redirect(route('dashboard.home'));
                }
                else{
                    $err_login="Wrong Password";
                    return view('home.landingpage',compact('err_login'));
                }
            
            }
            else{
                $err_login="Wrong Username";
                return view('home.landingpage',compact('err_login'));

            }
            
    }
    public function dashboard()
    {
        //dd(Auth::user());

        $todos = Todo:: all();
        return view('newfolder.loggedinpage',compact('todos'));
    }
}
