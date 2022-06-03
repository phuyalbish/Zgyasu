<!DOCTYPE html>
<html lang="en">
<head>
	
	@include('home_meta')
    <link rel="stylesheet" href="css/views_developer_cms.css">


    
<script>
    
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    function filterFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
    </script>
    <style>
        
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

    </style>
    
</head>
<body>
                <form method="post" action="{{route('register.store')}}">
				{{ csrf_field() }}

                <input 
					class="cms_input"
					 type="text" 
					 name='branch_inp' 
					 placeholder="Type Branch Topic" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                     <input type="submit" value="Add">
                </form>
                <form method="post" action="{{route('register.store')}}">
                <input 
					class="cms_input"
					 type="text" 
					 name='intrest_inp' 
					 placeholder="Type Intrest Topic" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                     <select name="signin" id="">
                         <option value="Branches1">Branch1</option>
                         <option value="Branches1">Branch1</option>
                         <option value="Branches1">Branch1</option>
                     </select>
                     <input type="submit" value="Add">
                </form>

                <form method="post" action="{{route('register.store')}}">
                    <input type="search" name="serch_user" class="cms_input">
                    <input type="submit" value="Remove User">
                </form> 
                <form method="post" action="{{route('register.store')}}">
                    <input type="search" name="serch_server" class="cms_input">
                    <input type="submit" value="Remove Server">

                </form> 
                <form method="post" action="{{route('register.store')}}">
                    <input type="search" name="serch_ques" class="cms_input">
                    <input type="submit" value="Remove Question">

                </form> 
                <form method="post" action="{{route('register.store')}}">
                    <input type="search" name="serch_ans" class="cms_input">
                    <input type="submit" value="Remove Answer">

                </form> 
                <form method="post" action="{{route('register.store')}}">
                <input 
					class="cms_input"
					 type="text" 
					 name='add_user_inp' 
					 placeholder="Developer Name" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                     <input 
					class="cms_input"
					 type="password" 
					 name='add_user_pass' 
					 placeholder="Enter Password" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                    <input type="submit" value="Add Developer">
                </form> 
                
                <form method="post" action="{{route('register.store')}}">
                
                     <input 
					class="cms_input"
					 type="password" 
					 name='add_user_pass' 
					 placeholder="Enter Password" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                    <input type="submit" value="Delete this Developer">
                </form> 

                <form method="post" action="{{route('register.store')}}">
                <input 
					class="cms_input"
					 type="text" 
					 name='add_developer_inp' 
					 placeholder="Developer Name" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                     <input 
					class="cms_input"
					 type="password" 
					 name='add_developer_pass' 
					 placeholder="Enter Password" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                    <input type="submit" value="Add Developer">
                </form> 

                <form method="post" action="{{route('register.store')}}">
                    <input 
					class="cms_input"
					 type="password" 
					 name='edit_developer_pass' 
					 placeholder="Enter New Password" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                     <input 
					class="cms_input"
					 type="password" 
					 name='edit_developer_pass_currentpass' 
					 placeholder="Enter Current Password" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                    <input type="submit" value="Update Password">
                </form> 
                
                <form method="post" action="{{route('register.store')}}">
                    <input 
					class="cms_input"
					 type="int" 
					 name='edit_developer_pass' 
					 placeholder="Developer Name" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                     <input 
					class="cms_input"
					 type="password" 
					 name='edit_developer_pass_currentpass' 
					 placeholder="Enter Password" 
					 required="required" 
					 minlength="5"
					 autocomplete="off">
                    <input type="submit" value="Update Password">
                </form> 

                

            <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <!-- <form action="" method="get"></form> -->
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>
            <input type="submit" value="Submit">
            <!-- </form> -->

            </div>

        <a href="{{route('developer.signout')}}"  class="" id="" >Log out</a>    
</body>
</html>





















