<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    <title>Zgyasu | Cookie</title>
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
        <img src="images/badge_cookie.jpg" alt="" srcset="">
    </div>
<div class="description_body">
        
        <div class="inner_description_body" >
            <div class="documentation">
                 
<h1>Cookie Policy</h1>
<br><p>
Please read this cookie policy (“cookie policy”, "policy") carefully before using website operated by Zgyasu. </p><br><h3>
What are cookies? </h3><br><p>
Cookies are simple text files that are stored on your computer or mobile device by a website’s server. Each cookie is unique to your web browser. It will contain some anonymous information such as a unique identifier, website’s domain name, and some digits and numbers. </p><p><b>
What types of cookies do we use? </b></p></br>
<i>Necessary cookies</i> <br><p>
Necessary cookies allow us to offer you the best possible experience when accessing and navigating through our website and using its features. For example, these cookies let us recognize that you have created an account and have logged into that account. </p><i>
Functionality cookies </i><br><p>
Functionality cookies let us operate the site in accordance with the choices you make. For example, we will recognize your username and remember how you customized the site during future visits. </p><i>
Analytical cookies </i><br><p>
These cookies enable us and third-party services to collect aggregated data for statistical purposes on how our visitors use the website. These cookies do not contain personal information such as names and email addresses and are used to help us improve your user experience of the website. </p><br><hr><br><p><b>
How to delete cookies? </b></p><br><p>
If you want to restrict or block the cookies that are set by our website, you can do so through your browser setting. Alternatively, you can visit <i>www.internetcookies.com</i>, which contains comprehensive information on how to do this on a wide variety of browsers and devices. You will find general information about cookies and details on how to delete cookies from your device. </p><br><hr>
<br><p><b>Contacting us </b></p><br>
<p>If you have any questions about this policy or our use of cookies, please contact us in <i>www.zgyasu.com.</i><p> 
 


            </div>
        </div>
    </div>
@include('layouts.home_footer')
</body>
</html>