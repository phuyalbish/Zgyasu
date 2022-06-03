
    <link rel="stylesheet" href="css/layout_signinup.css">
    <script type="text/javascript">
        function opencloseErr(){
			var err = <?php echo json_encode($errors); ?>;
        if(err != null){
			alert(err);
            document.getElementById('signinpopup').style.display = "display";
        }
        else{
			alert(err);
            document.getElementById('signinpopup').style.display = "none";
        }
		}
		
		</script>
	
    <div class="signinpopup" id="signinpopup">
		<span onload="opencloseErr()"></span>
		<div class="backgroundblurr" onclick='popupclose()'></div>
        <div class="innersigninpopup">
            <i class="fa-solid fa-xmark"  onclick="popupclose()" id="cross-position"></i>
			
			
			
			@if(isset($err_login))
			
			<div class="errormessage">
                    <p>{{$err_login}}</p>
			</div>
                @endif
                    
			@if ($errors->any())
			<div class="errormessage">
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
			</div>
		@endif
            <img src="images/favicon.png" class="signinup_logo" alt="" srcset="">
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" class="signupform" action="{{route('register.store')}}">
				{{ csrf_field() }}
					<label class="signinup_label" for="chk" aria-hidden="true" style="margin:10px;">Sign up</label>

					<input 
					class="signinup_input"
					 type="text" 
					 name='user_username' 
					 placeholder="Username" 
					 required="required" 
					 minlength="5"
					 autocomplete="off"
					 value="{{ old('user_username') }}"> 

					<input class="signinup_input"
					 type="text" 
					 name="user_fname" 
					 placeholder="Full Name" 
					 required="required" 
					 minlength="3"
					 autocomplete="off"
					 value="{{ old('user_fname') }}">

					<input class="signinup_input"  
					type="email" 
					name="user_email"
					 placeholder="Email" 
					 required="required" 
					 autocomplete="off"
					 value="{{ old('user_email') }}">

					<input  class="signinup_input" 
					type="password" 
					name="user_password" 
					placeholder="Password" 
					minlength="8"
					 autocomplete="off"
					required="required" >
					
					<input class="signinup_input" 
					type="text" 
					name="user_bio" 
					placeholder="Bio" 
					required="required"
					 minlength="15"
					 autocomplete="off"
					value="{{ old('user_bio') }}">

					<div class="signin_checkbox" >
						<?php 
							$count=0;
						?>
					@foreach($interests as $interest)
						
						<div class="select_items"><input type=checkbox name="user_intrest[{{$count}}]" value="{{$interest->interest_name}}"> <span class="select_text">{{$interest->interest_name}}</span></div>
						<?php
							$count++;
							?>
                        @endforeach
					</div>

					<button class="signinup-button signup-button">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="get" action="{{route('loginCheck')}}">
				
					<label class="signinup_label" for="chk" aria-hidden="true">Login</label>
					<input class="signinup_input"  type="text" name="user_username" placeholder="UserName" required=""  autocomplete="off">
					<input  class="signinup_input" type="password" name="user_password" placeholder="Password" required=""  autocomplete="off">
					<button  class="signinup-button signin-button">Login</button>
				</form>
			</div>
	</div>
        </div>
    </div>
	<script>
        
			@if($errors->any() || isset($err_login)) 
					document.getElementById('signinpopup').style.display = "block";
			@else
					document.getElementById('signinpopup').style.display = "none";
		
			@endif
		</script>