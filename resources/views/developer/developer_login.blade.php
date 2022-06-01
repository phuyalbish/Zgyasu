<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Get all the answers you need as a beginner of any group. Zgyasu provides the platform to connect newbie and the experts in some organization or a group to share the idea.">
    <meta name="keywords" content="Query System, Questions, Query, Ask, Feedback System, Nepal, What, Why, How, When, Companies, Who">
    <meta name="author" content="Sanish Maharjan, Bishal Phuyal, Rejina Maharjan, Prabin Buddhacharya, Ravi Singh KUmal">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../files/images/favicon.png">
    <title>Sign In CMS</title>
</head>
<body>

    <form action="{{route('developer.loginCheck')}}" method="post">
    {{ csrf_field() }}
        <input type="text" name="developer_uname" required="required" placeholder="Name">
        <input type="password" name="developer_password" required="required" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
    
			@if(isset($dev_err_login))
			
			<div class="deverrormessage">
                    <p>{{$dev_err_login}}</p>
			</div>
                @endif
    
</body>
</html>