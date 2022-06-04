<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/dashboard_meta')
    <title>@yield('title')</title>
</head>

    
<body>
    <div class="sidebar">
    <div class="sidebar_logo_content">
                 <a href="{{route('dashboard.home')}}"><img src="{{url('images/favicon-light.png')}}" alt="" srcset="" class="sidebar_logo"></a>
            </div>

            <div class="sidebar_scroll_content sidebar_content">
                <div class="sidebar_server_content">
                       @foreach($serverarr as $server)
                       
                        <a href="{{route('dashboard.server-join',[$server])}}"><img class="sidebar_icons" src="{{url('images/'.$server.'.png')}}" onerror=this.src="{{url('images/alternate_server.svg')}}" srcset=""></a>
                        @endforeach

                </div>
                <div class="sidebar_explore_add_help_content sidebar_fixed_items">
                    <a onclick=""><i class="fa-solid fa-compass  sidebar_icons"></i>
                   <a onclick="serveropenpopup()"><i class="fa-solid fa-circle-plus  sidebar_icons"></i></a>
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







    <div class="signinpopup"   id="dashboard-signinpopup" >
			
			
			
    <div class="backgroundblurr" onclick='serverpopupclose()'></div>
        <div class="innersigninpopup">
			
			@if ($errors->any())
			<div class="errormessage">
				
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
			</div>
            
		    @endif
            <img src="{{url('images/favicon.png')}}" class="signinup_logo" alt="" srcset="">

            <i class="fa-solid fa-xmark"  onclick="serverpopupclose()" id="cross-position"></i>
            <form method="post" class="signupform" action="{{route('server.store')}}">
				{{ csrf_field() }}
					<input type="hidden" name="server_admin" value="{{$cookie}}">
                    <input 
					class="form-control form-control-lg"
					 type="text" 
					 name='server_tagname' 
					 placeholder="Server TagName" 
					 required="required" 
					 minlength="5"
					 autocomplete="off"
					 value="{{ old('server_tag') }}"> 

                    <input 
					class="form-control form-control-lg"
					 type="text" 
					 name='server_name' 
					 placeholder="Server  Name" 
					 required="required" 
					 minlength="5"
					 autocomplete="off"
					 value="{{ old('server_name') }}"> 

                    <input 
					class=""
					 type="text" 
					 name='server_description_head' 
					 placeholder="Description Head" 
					 required="required" 
					 minlength="10"
					 autocomplete="off"
					 value="{{ old('server_description_head') }}"> 
                 
                    <textarea name="server_description"  placeholder="Description Body" minlength="20"  id="" cols="20" rows="7">{{ old('server_description_body') }}</textarea>
					  
					
                  
                    <input 
					class="form-control form-control-lg"
					 type="url" 
					 name='server_link' 
					 placeholder="Server Link" 
					 required="required" 
					 autocomplete="off"
					 value="{{ old('server_link') }}"> 
                  
                  <select class="select form-control-lg"  name="branch_name" >
                    <option disabled>Choose Branch</option>
                        @foreach($branches as $branch)
						<option value="{{$branch->branch_name}}">{{$branch->branch_name}}</option>
						
                        @endforeach

                  </select>

                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
             

            </form>
</div>
</div>
<script>
        
		@if($errors->any()) 
				document.getElementById('dashboard-signinpopup').style.display = "block";
		@else
				document.getElementById('dashboard-signinpopup').style.display = "none";
	
		@endif
	</script>
        

</body>
</html>