function validateform(){  
	        var name=document.myform.name.value;
			var username=document.myform.username.value;  
			var password=document.myform.password.value;  
			 
			  
			if ((username==null || username=="") && (password==null || password=="")){  
			  alert("Userame and Password can't be blank");  
			  return false;  

			}else if(password.length<6){  
			  alert("Password must be at least 6 characters long.");  
			  return false;  
			}  

			
		}
		function checkEmpty() {
		  	if (document.myform.username.value = "") {
		  		alert("Name can't be blank");
		        return false;  
		  	}
		  }  
		  function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }

        function checkEmail() {
      if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "Email cant be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
      }
     else if(document.getElementById("email").value.indexOf('@')<=0){
        document.getElementById("emailErr").innerHTML="Invalid Email Position of @";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }
      else if(document.getElementById("email").value.search('@gmail.com')==-1){
        document.getElementById("emailErr").innerHTML="Sorry!! (Your format has to be ...@gmail.com)";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }    
       else{
        document.getElementById("emailErr").innerHTML = "";
          document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "black";
      }
    }
			
        

		function checkUserName() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("usernameErr").innerHTML = "Username can't be blank";
			  	document.getElementById("usernameErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}else{
			  	document.getElementById("usernameErr").innerHTML = "";
				document.getElementById("username").style.borderColor = "black";
			}
			
        }
        function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}else if(document.getElementById("password").value.length<6){
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }
       function checkConfirmPass(){
        	if (document.getElementById("cpassword").value == "") {
			  	document.getElementById("cpassErr").innerHTML = "Password can't be blank";
			  	document.getElementById("cpassErr").style.color = "red";
			  	document.getElementById("cpassword").style.borderColor = "red";
			}else if(document.getElementById("cpassword").value.length<6){
			  	document.getElementById("cpassword").style.borderColor = "red";
			  	document.getElementById("cpassErr").style.color = "red";
				document.getElementById("cpassErr").innerHTML = "Password must be at least 6 characters long.";
			}
			else{
				document.getElementById("cpassErr").innerHTML = "";
			  	document.getElementById("cpassErr").style.color = "red";
				document.getElementById("cpassword").style.borderColor = "black";
			}
        }

        function checkDOB() {
      if (document.getElementById("birthday").value == "") {
          document.getElementById("birthdayErr").innerHTML = "Date of Birth must be Filled-Up";
          document.getElementById("birthdayErr").style.color = "red";
          document.getElementById("birthday").style.borderColor = "red";
      }
      else{
        document.getElementById("birthdayErr").innerHTML = "";
          document.getElementById("birthdayErr").style.color = "red";
        document.getElementById("birthday").style.borderColor = "black";
      }
        }

