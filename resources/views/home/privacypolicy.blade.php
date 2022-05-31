<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    <title>Zgyasu | Privacy Policy</title>
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
        <img src="images/badge_privacy.jpg" alt="" srcset="">
    </div>
<div class="description_body">
        
        <div class="inner_description_body">
            <div class="documentation">
            <h1>Privacy Policies:</h1>
            <p>We want you to understand how and why ZGYASU collects, uses, and shares information about you when you use our websites and mobile or when you otherwise interact with us or receive a communication from us.</p>
<hr>
<br>
<h3>Collected information:</h3>
<br>
<p>We collect information you provide to us directly when you create a profile as a user or service provider.<p>

<p>Account information. To create an account, you must provide a username and password. Your username is public. You may also provide an email address. We also store your user account preferences and settings.</p>

<p>Content you submit. We collect the content you submit to the website through your account. This includes your profile and related information, which may include your contact details and details regarding your business based on the information provided while creating the account including saved drafts and your communications with us. Your content may include text, links, images, and videos.</p>

<p>Other information. You may choose to provide other information directly to us. For example, we may collect information when you fill out a form, participate in activities or promotions, request information or otherwise communicate with us.</p>

<p>Log-ins and usage data. We may log information when you access the ZGYASU. This may include your IP address, user-agent string, browser type, operating system, referral URLs, device information (e.g., device IDs), pages visited, links clicked, the requested URL, hardware settings, and search terms.</p>

<p>Location information. We may receive and process information about your location. For example, with your consent, we may collect information about the specific location of your mobile device (for example, by using GPS or Bluetooth).</p>
<hr>
<br>
<h3>Use of the collected information:</h3>
<br>
<p><b>The ZGYASU collects the information for the following reasons:</b></p>
<ol>
    <li>Showcase your products and services to the users.</li>
    <li>Communicate with you about related updates , and provide other news and information we think will be of interest to you.</li>
    <li>Help you get connected to people who answered your querie's and people intrested in topic you raised as question.</li>
    <li>Information sharing.</li>
</ol>
<hr>
<br>
<h3>When you create a profile on the ZGYASU, certain information may be visible to the public. Such as:</h3>

<ul>
    <li>
When you submit content (such as a profile and other details) to the ZGYASU, any visitors to, and users of, the ZGYASU will be able to see that content.</li>
<li>When you send private messages, messages or private chats, the recipients of those messages will be able to see the content of your message, your username, and the date and time the message was sent.
</li></ul>

<p>
For more information about the purpose and scope of data collection and processing in connection with social sharing features, please visit the privacy policies of the third parties that provide these social sharing features (e.g., Tumblr, Facebook, and Twitter).
<i>Otherwise, we do not share, sell, or give away your personal information to third parties.</i>
</p></div>
        </div>
    </div>
@include('layouts.home_footer')
<style>
</style>
</body>
</html>