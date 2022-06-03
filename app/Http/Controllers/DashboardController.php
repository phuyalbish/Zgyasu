<?php

namespace App\Http\Controllers;
use App\Models\Server;
use App\Models\Branch;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function DashboardHome(){

        $cookie = $_COOKIE['cookie_user'];
        $branches = Branch:: all();
        $servers = Server::query()->where('server_tagname', 'LIKE', "%{{$cookie}}%")->get();
        return view('dashboard.home',compact('servers','branches','cookie'));
    }
    function DashboardExploreBranch(){
        return view('dashboard.explore-branch');

    }
    function DashboardExploreServers(){
        return view('dashboard.explore-servers');

    }
    function DashboardServerJoin(){
        return view('dashboard.server-join');

    }
    function DashboardServerPreviewe(){
        return view('dashboard.server-preview');

    }
    function DashboardServerSetting(){
        return view('dashboard.server-setting');

    }
    function DashboardUserSetting(){
        return view('dashboard.user-setting');

    }
    function Check(){
        
        $branches = Branch:: all();
        $cookie = $_COOKIE['cookie_user'];
        $servers = Server::query()->where('server_tagname', 'LIKE', "%{{$cookie}}%")->get();
        return view('dashboard.server-create',compact('servers','branches','cookie'));
    }

   public function Serverstore(Request $request){
    
    $this->validate($request,[
        'server_tagname' => 'required||unique:servers,server_tagname',
        'server_name' => 'required',
        'server_description_head' => 'required',
        'server_description' => 'required',
        'server_admin' => 'required',
        'server_link' => 'required',
        'branch_name' => 'required',
    ]);

    $serverStore=new Server();
    $serverStore->server_tagname=$request->server_tagname;
    $serverStore->server_name=$request->server_name;
    $serverStore->server_description_head=$request->server_description_head;
    $serverStore->server_description=$request->server_description;
    $serverStore->server_admin= $request->server_admin;
    $serverStore->server_link= $request->server_link;
    $serverStore->branch_name= $request->branch_name;
    $serverStore->save();

    return redirect(route('dashboard.home'));
    }
}

