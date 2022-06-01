<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    <link rel="stylesheet" href="css/layout_home_footer.css">
    
.scrollaction {
  z-index:2;
}
</style>
        <script>
            window.onscroll = function() {myFunction()};

            function myFunction() {
            if (document.documentElement.scrollTop > 700) {
                document.getElementById("scrollaction").style.zIndex = "1";
            } else {
                document.getElementById("scrollaction").style.zIndex = "0";
            }
            }
        </script>
</head>
<body>
<footer id="scrollaction">
    <div class="innerfooter">
        <div class="gridfooter">
            <div class="innercontainer innercontainer1">
                <h3>Contact Us:</h3>
                <div class="floatcontainer">
                <i class="fa-solid fa-phone"></i>
                    +977 9869023901
                </div>

                <div class="floatcontainer">
                    <i class="fa-solid fa-location-dot"></i>    
                    Kathmandu, Nepal KTM 44600
                </div>

                <div class="floatcontainer">
                    <a mailto="zgyasu@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                   zgyasu@gmail.com</a>
                </div>
                <div></div>
                <div></div>
            </div>
            <div class="innercontainer innercontainer2">
                <h3>Follow Us:</h3>
                <div class="floatcontainer">
                    <a href="https://www.facebook.com/zgyasu">
                    <i class="fa-brands fa-facebook"></i>facebook.com/zgyasu</a>
                </div>
                
                <div class="floatcontainer">
                    <a href="https://www.instagram.com/zgyasu">
                        <i class="fa-brands fa-instagram"></i>instagram.com/zgyasu
                    </a>
                </div>
                
                <div class="floatcontainer">
                    <a href="twitter.com/zgyasu">
                    <i class="fa-brands fa-twitter"></i>twitter.com/zgyasu</a>
                </div>
                
                <div class="floatcontainer">
                    <a href="https://www.linkedin.com/company/zgyasu">
                    <i class="fa-brands fa-linkedin-in"></i>
                    linkedin.com/company/zgyasu</a>
                </div>
                
                
                <div class="floatcontainer">
                    <a href="https://www.github.com/zgyasu">
                    <i class="fa-brands fa-github"></i>
                   github.com/zgyasu</a>
                </div>
                
                
            </div>
            <div class="innercontainer innercontainer3">
                <h3>About Us:</h3>
                <p>Zgyasu is the  query  system that connects the questioner and the answerer with the common server. Helps clear all the queries one gets while starting to any group. </p>
                <div class="floatcontainerhead">
                    <img src="images/favicon-light.png" alt="" style="width:45px;">
                    <h2>  Zgyasu</h2>

                </div>
            </div>
        </div>
        <hr size=".4px">
        <div class="policiesfooter">
               
            <div class="policies policy1"> <a href="{{route('home.privacypolicy')}}">Privacy Policy</a></div>
            <div class="policies policy2"><a href="{{route('home.cookie')}}">Cookie Policy</a></div>
            <div class="policies policy3"><a href="{{route('home.termsandcondition')}}">Terms and Conditions</a></div>
            <div class="policies policy4"><a href="{{route('home.helpandsupport')}}">Help and Support</a></div>
        </div>
        <br>
        <div class="rightsreserved">
                <p>&copyZgyasu Inc. 2022. <b>All Rights Reserved</b></p>
        </div>
    </div>
</footer>
</body>
</html>