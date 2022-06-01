<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('meta')
    <title>Zgyasu | AboutUs</title>
    
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
        <img src="images/badge_aboutus.jpg" alt="" srcset="">
    </div>
    <div class="description_body">
        
        <div class="inner_description_body">
                <div class="documentation">
                    <h1>About Us</h1>
                <p>Welcome to Zgyasu, your number one source for all the queries you have in your head when you are enrolled in to new organization or a group. We're dedicated to giving you the very best of Query System, as a service and responsive and user friendly design with a focus on easy accessibility, secure and good support with collaboration with the group.</p><br><p>
Founded in 2022 by Bishal Phuyal, Sanish Maharjan, Prabin Buddhacharya, Rejina Maharjan and Ravi Singh <b>Zgyasu</b> has come a long way from its beginnings in a <b>kathmandu, Nepal</b>. When 5 fellow first started out, their passion for helping the new commers from not being stupid on new things they come up with an idea of creating a software to fill the market gap since there were none so it drove them to set aside the academics, and gave them the impetus to turn hard work and inspiration into to a widely used query platform. We now serve different group and companies all over Nepal, and are thrilled to be take this in a international level.</p>
<br><i>
We hope you enjoy our service as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</i><br><br>

<p><b>Sincerely,</b></p>
<p>The five Fellow co-founder of the Zgyasu family</p>
<br>
</div>
                </div>
        </div>
    </div>
    @include('layouts.home_footer')

</body>
</html>