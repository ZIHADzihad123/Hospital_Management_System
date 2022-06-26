
		function validateform(){  
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
		function checkUserName() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("usernameErr").innerHTML = "Name can't be blank";
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
       

