		    
<!DOCTYPE HTML>
<html>
	<body>
		<class style="float:right;"><?php include 'header.php';?></class>
		<h2 style="color:green";>Azex Company</h2>
		<hr>
	</body>
	<body>
		<?php
		$username= $password= $email= $name=  $gender= $dob="";
		          	 
		     		          	
		session_start();
					
			if(file_exists('Registration.json'))
	    {
					$current_data = file_get_contents('Registration.json');
					$array_data = json_decode($current_data, true);
					
		     foreach($array_data as $user) 
		     {    if(isset($_POST["Username"])){
		          if($user['username']==$_POST['Username'] && $user['password']==$_POST['Password'])
		          {
		          	  $username=$user['username'];
		          	  $password=$user['password'];
		          	  $email=$user['email'];
		          	  $name=$user['name'];
		          	  $gender=$user['gender'];
		          	  $dob=$user['dateOfBirth'];
		          }
		      }
			         
		      } 
			        if(isset($_POST["Username"])){
			         if ($_POST['Username']==$username && $_POST['Password']==$password)
					  {
					  $_SESSION['Username']=$user['username'];
		          	  $_SESSION['Password']=$user['password'];
		          	  $_SESSION['Email']=$user['email'];
		          	  $_SESSION['Name']=$user['name'];
		          	  $_SESSION['Gender']=$user['gender'];
		          	  $_SESSION['Dob']=$user['dateOfBirth'];
						header("location:welcome.php");
						}
						else
						{
						$msg="username or password invalid";
					    
					    }}
				 
		}	

		
		else
		{
		       $error = 'JSON File not exits';
		}

		
		     
	

		
		?>
		      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table align="center">
		
		<tr>
			<th colspan="2"><h2>LOGIN FOR RECEIPTIONIST</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		<tr>
			<td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		</tr>
		<?php } ?>
		<tr>
			<td>username</td>
			<td><input type="text" name="Username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="Password"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
	<br><br><hr>
	<center><?php include 'footer.php';?></center>
	
</form> 
			
		</body>
		
	</html>

	