<?php

namespace App\Http\Controllers;
use App\Models\Server;
use App\Models\Branch;
use App\Models\Interest;
use App\Models\UserInterestBridge;
use App\Models\UserServerBridge;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function DashboardHome(){

        $cookie = $_COOKIE['cookie_user'];
        $branches = Branch:: all();


        $count= 10;
        $countarr = 0;
        $serverarr = array();
        foreach(UserServerBridge::all() as $servers){

            if ($servers->user_username == $cookie)
            {
                 $serverarr[$countarr] = $servers->server_tagname;
                 $countarr++;
            }
        }
        return view('dashboard.home',compact('serverarr','branches','cookie'));
    }

    
    function DashboardExploreBranch(){
        


    $cookie = $_COOKIE['cookie_user'];

    $selected_branches = DB::select('select distinct(branch_name) from interests inner join userinterestbridges on interests.interest_name = userinterestbridges.interest_name where user_username = ?',[$cookie]);
   
    for($i=0; $i<count($selected_branches); $i++){
        $branch_arr[$i] = $selected_branches[$i]->branch_name;

    }
    $count=0;
        for($i=0; $i<count($branch_arr); $i++){
            $recom_servers[$count]= Server::where('branch_name',$branch_arr[$i])->get('server_tagname');
            // $serverss = $recom_servers[$count]->get('server_tagname');
           
        }
        return $recom_servers;

        $branches = Branch:: all();
        $count= 10;
        $countarr = 0;
        $serverarr = array();
        foreach(UserServerBridge::all() as $servers){

            if ($servers->user_username == $cookie)
            {
                 $serverarr[$countarr] = $servers->server_tagname;
                 $countarr++;
            }
        }
        return view('dashboard.explore-branch',compact('serverarr','branches','cookie','recom_servers','selected_branches','recom_servers'));

    }
    function DashboardExploreServers(){
        return view('dashboard.explore-servers');

    }
    public function DashboardServerJoin($serverurl){

        $cookie = $_COOKIE['cookie_user'];
        $branches = Branch:: all();


        $count= 10;
        $countarr = 0;
        $serverarr = array();
        foreach(UserServerBridge::all() as $servers){

            if ($servers->user_username == $cookie)
            {
                 $serverarr[$countarr] = $servers->server_tagname;
                 $countarr++;
            }
        }
        return view('dashboard.server-join',compact('serverarr','branches','cookie','serverurl'));

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

