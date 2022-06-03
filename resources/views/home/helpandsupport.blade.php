<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.home_meta')
    <title>Zgyasu | Help and Support</title>
    <script>
        window.addEventListener('scroll', footerzIndex);
    </script>
</head>
<body onload="ShowHideDashboardNav(
 @if(isset($_COOKIE['cookie_user'])) 1
    @else 0
    @endif
)">
    @include('layouts.home_signinup')
@include('layouts.home_navbar');

<div class="home_badge">
        <!-- <video autoplay muted loop src="videos/video.mp4" width="100%" height="100%"></video> -->
        <img src="images/badge_helpandsupport.jpg" alt="" srcset="">
    </div>
<div class="description_body">
        
        <div class="inner_description_body">
            
        </div>
    </div>
@include('layouts.home_footer')
</body>
</html>