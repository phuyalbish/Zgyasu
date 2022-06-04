@extends('layouts/dashboard_layout')
    @section('title','Dashboard - Home')
    
    @section('dashboard_main')
        <a href="{{route('dashboard.signout')}}"  class="" id="" >Log out</a>  
        <!-- @include('dashboard.server-create') -->
    @endsection