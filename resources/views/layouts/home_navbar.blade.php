<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    <link rel="stylesheet" href="css/layout_home_navbar.css">
    
   
</head>
<body>
        <div class="innernavbar">
        <div class="logo">
        <a href="{{route('home.landingpage')}}"><img class="logos" src="images/favicon.png"></a>
        </div>
        <div class="div_buttons"  id="landingpage_hide_nav">
            <a href="{{route('home.aboutus')}}" class="navbar_link" > <b>Learn More</b> </a>
            <a onclick="openpopup()" class="navbar_button navbar_link" id="getstarted1">Get Started</a>
            <a href="{{route('dashboard.home')}}"  class="navbar_button navbar_link" id="opendashboard1" >Open Dashboard</a>
        </div>
    </div>
    <script>
            window.onscroll = function() {landinghideNav()};

            
        </script>
</body>
</html>