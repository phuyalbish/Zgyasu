@extends('layouts/dashboard_layout')
    @section('title','Dashboard - Explore')
    @section('dashboard_main')
    

    @for($i=0; $i< count($recom_servers); $i++)
        @for($j=0; $j< count($recom_servers[$i]); $j++)
            @foreach($recom_servers[$i][$j] as $tagname=>$server_list)
                @foreach($server_list as $tagnames=>$server_names)

                <p>{{$server_names}}</p>
                @endforeach
                @endforeach
         @endfor
         @endfor
         <!-- {{dd($recom_servers);}} -->
         <h1>dfkmdkfmdm dflf poskdkfo</h1>

    @endsection