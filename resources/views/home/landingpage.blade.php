<!DOCTYPE html>
<html lang="en">
<head>

    @include('meta')
    <link rel="stylesheet" href="css/views_home_landingpage.css">
    <title>Zgyasu | Home</title>

</head>
<body onload="ShowHideDashboard(
    @if(isset($_COOKIE['cookie_user'])) 1
    @else 0
    @endif
)">
        
        
    @include('layouts.home_signinup')
    
    @include('layouts.home_navbar');
    <div class="home_badge2">
        <video autoplay muted loop src="images/landingvideo2.mp4" style="position:relative; max-width:100vw;" ></video>
        <!-- <img src="images/landingvideo.jpg" alt="" srcset=""> -->
    </div>

    <div class="description_body2">
    <div class="dialog_container">
                <h1>Ask <span id="ques_style">Question</span>,<br/>Get Answers</h1>
                <p>{{$user_count}} Users | {{$server_count}} Servers</p>
                <br>
                <div class="group_description_buttons">
                    <a  href="{{route('dashboard.home')}}" class="group_description_button group_description_button_getstarted" id="opendashboard2" href="" >Open Dashboard</a>
                    <button onclick="openpopup()" class="group_description_button group_description_button_getstarted " id="getstarted2" >Get Started</button>
                    <a href="{{route('home.aboutus')}}" class="group_descripton_link">Learn More</a>
                </div>

            </div>
        <div class="inner_background2">
            
        <div class="inner_description_body">
            
             
            <br>
            <div class="grid_view_description_body">
                
                <div class="group_video group_video_join">
                    <!-- <video autoplay muted loop src="/videos/video.mp4" width="100%" height="100%"></video>-->
                    <img width="100%" src="images/landingvideo.jpg" alt="" srcset="">
                 </div>



                <div class="group_description_box group_description_join">
                    <p class="group_description_desc group_description_desc_join">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                    </p>
                    <a  href="{{route('dashboard.home')}}"  class="group_description_button group_description_button_join " id="opendashboard3"  >Join The Group</a>
                    <button  onclick="openpopup()" class="group_description_button group_description_button_join " id="getstarted3" >Join The Group</button>
                </div>



                <div class="group_description_box group_description_create">
                <a  href="{{route('dashboard.home')}}"   class="group_description_button group_description_button_create" id="opendashboard4" >Create a Server</a> 
                <button onclick="openpopup()" class="group_description_button group_description_button_create" id="getstarted4" >Create a Server</button>
                    <p class="group_description_desc group_description_desc_create">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime?
                    </p>
                </div>


                
                <div class="group_video group_video_create">
                    <!-- <video autoplay muted loop src="{{asset('videos/video.mp4')}}" width="100%" height="100%"></video> -->
                    <img width="100%" src="images/landingvideo.jpg" alt="" srcset="">

                </div>

               <div class="square_view_description_body"></div>
            </div>

            <div class="group_description_box">
                    <div class="group_video group_video_outer">
                    <!-- <video autoplay muted loop src="!!/videos/video.mp4" width="100%" height="100%"></video> -->
                    <img width="100%" src="images/landingvideo.jpg" alt="" srcset="">

                    </div>
                    <div class="group_description_box_inner_outer group_description_connect">
                
                    <p class="group_description_desc group_description_desc_outer">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                    </p>
                    <a  href="{{route('dashboard.home')}}"  class="group_description_button group_description_button_connect " id="opendashboard5" >Connect with People</a>
                    <button  onclick="openpopup()" class="group_description_button group_description_button_connect" id="getstarted5" >Connect with People</button>
                </div>

            </div>

            <br>
            <div class="group_description_box">
                <div class="group_video group_video_outer">
                    <!-- <video autoplay muted loop src="../../files/videos/video.mp4" width="100%" height="100%"></video> -->
                    <img width="100%" src="images/landingvideo.jpg" alt="" srcset="">

                </div>
                <div class="group_description_box_inner_outer group_description_ask">
            
                <p class="group_description_desc group_description_desc_outer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                </p>
                <a  href="{{route('dashboard.home')}}"  class="group_description_button group_description_button_ask " id="opendashboard6" >Ask Question</a>
                <button  onclick="openpopup()" class="group_description_button group_description_button_ask" id="getstarted6" >Ask Question</button>
            </div>

        </div>


        <br>
        <div class="group_description_box_outer">
                <div class="group_video group_video_outer">
                        <!-- <video autoplay muted loop src="videos/video.mp4" width="100%" height="100%"></video> -->\
                        <img width="100%" src="images/landingvideo.jpg" alt="" srcset="">

                </div>
                <div class="group_description_box_inner_outer group_description_answer">
            
                <p class="group_description_desc group_description_desc_outer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nisi dolorem nihil eligendi temporibus delectus consequuntur voluptatem quam nostrum! Quae veritatis esse odio totam vel voluptates, praesentium quod vitae maxime? 
                </p>
                <a  href="{{route('dashboard.home')}}"  class="group_description_button group_description_button_answer " id="opendashboard7" opendashboard-option">Answer Question</a>
                <button onclick="openpopup()" class="group_description_button group_description_button_answer" id="getstarted7" >Answer Question</button>
            </div>   
    </div>
</div>
<div class="company">
        <h2>Institute who trusted us:</h2>
           <div class="company_photo_grid">
                <a href=""><img class="company_images" src="images/company-adb.png"alt=""></a>
                <a href=""><img class="company_images" src="images/company-cg.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-cotivity.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-deerwalk.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-esewa.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-golyan.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-laxmi.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-nabil.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-nccs.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-ncell.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-onair.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-prime.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-viewfinder.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-worldlink.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-cloudfactory.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-dishhome.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-ime.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-leapfrog.jpeg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-marriot.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-ok.jpg" alt=""></a>
                <a href=""><img class="company_images" src="images/company-rpb.png" alt=""></a>
                <a href=""><img class="company_images" src="images/company-versik.png" alt=""></a>
            </div>
    </div>

            <div class="review_content">
                    <h2>User's Review<h2>
                <div class="inner_review_content">
                        <div class="reviews_box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            <img src="images/favicon.png" alt="">
                        </div>

                        <div class="reviews_box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            <img src="images/favicon.png" alt="">
                        </div>

                        <div class="reviews_box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            <img src="images/favicon.png" alt="">
                        </div>

                        <div class="reviews_box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            <img src="images/favicon.png" alt="">
                        </div>
                        
                        <div class="reviews_box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            <img src="images/favicon.png" alt="">
                        </div>
                </div>
            </div>
    </div>
    </div>

    @include('layouts.home_footer');
    </div>
    
</body>
</html>