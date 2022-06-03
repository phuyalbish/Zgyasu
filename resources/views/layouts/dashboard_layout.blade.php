<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard/dashboard_meta')
    <title>@yield('title')</title>
</head>

<body>
    <link rel="stylesheet" href="{{url('css/layout_dashboard.css')}}">
    <div class="sidebar">
    <div class="sidebar_logo_content">
                 <a href="{{route('dashboard.home')}}"><img src="{{url('images/favicon-light.png')}}" alt="" srcset="" class="sidebar_logo"></a>
            </div>

            <div class="sidebar_scroll_content sidebar_content">
                <div class="sidebar_server_content">
                        @foreach($servers as $server)
                        <a href="dashboard/explore-branch/{{$nam->id}}"><i class="fa-solid fa-circle-question sidebar_server_icons sidebar_icons"></i>{{$interest->interest_name}}</a>

                        @endforeach

                </div>
                <div class="sidebar_explore_add_help_content sidebar_fixed_items">
                    <a href="{{route('dashboard.explore-branch')}}"><i class="fa-solid fa-compass  sidebar_icons"></i>
                   <a onclick="openpopup()"><i class="fa-solid fa-circle-plus  sidebar_icons"></i></a>
                   <a href="{{route('home.helpandsupport')}}"><i class="fa-solid fa-circle-question  sidebar_icons"></i>
                </div>
            </div>
            <div class="sidebar_usersetting_content sidebar_content sidebar_fixed_items">
                <i class="fa-solid fa-gear fa-fw universal_dashboard_icons sidebar_icons"></i>
                 <i class="fa-solid fa-user fa-fw  universal_dashboard_icons sidebar_icons"></i>
            </div>
            
    </div>


    <div class="navbar">
        <div class="innernav">
                <div class="navbar_pageheading">
                    <div class="navbar_pageheading_title">Home - Dashboard of Bishal</div>
                    <div class="navbar_pageheading_description">Here we come teh dof kodof dok</div>
                </div>
                
                <div class="navbar_icons_right">
                    <div class="dashboard-navbar-search_bar">
                        <input type="text" name="search" class="dashboard-navbar-search" placeholder="search">
                    </div>
                    
                    <i class="fa-solid fa-magnifying-glass navbar_icons_items"></i>
                    <div class="dashboard-navbar-notifications navbar_icons_items">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <div class="dashboard-navbar-darkmode navbar_icons_items">
                        <i class="fa-solid fa-moon"></i>
                    </div>
                </div>
                
        </div>
    </div>

    <div class="main_content">
         @yield('dashboard_main');
    </div>

</body>
</html>