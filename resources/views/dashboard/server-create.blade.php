
<link rel="stylesheet" href="{{url('css/dashboard_server-create.css')}}">

<div class="backgroundblurr"  onclick='popupclose()'>

<div class="signinpopup" id="dashboard-signinpopup">
	
<i class="fa-solid fa-xmark"  onclick="popupclose()" id="cross-position"></i>
			
			
			
        <div class="innersigninpopup">
			
			@if ($errors->any())
			<div class="errormessage">
				
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
			</div>
		@endif
            <img src="{{url('images/favicon.png')}}" class="signinup_logo" alt="" srcset="">

            <i class="fa-solid fa-xmark"  onclick="popupclose()" id="cross-position"></i>
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
</div>
        
	<script>
        
		// @if($errors->any() || isset($err_login)) 
		// 		document.getElementById('dashboard-signinpopup').style.display = "block";
		// @else
		// 		document.getElementById('dashboard-signinpopup').style.display = "none";
	
		// @endif
	</script>
	