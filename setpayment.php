<!DOCTYPE HTML>
<html>
	<class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>COVID-19 Test Management System</h2>
    <hr>
	<body>
		<?php
		$username= $password= $email= $name=  $gender= $dob="";
		          	 
		     		          	
		session_start();
					
			if(file_exists('patients_Registration.json'))
	    {
					$current_data = file_get_contents('patients_Registration.json');
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
		          	   $setpayment=""
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
		          	  $_SESSION['SetPayment']=$setpayment;
						
						}
						else
						{
						$msg="Sorry!!These information does not match with you patients database";
					    
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
			<th colspan="2"><h2>SEARCH PATIENT</h2></th>
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
			<td align="right" colspan="2"><input type="submit" name="login" value="search"></td>
		</tr>
	</table>
	<br><br><hr>
	 <form>    
       <fieldset>
        
           <legend><h1>SET PAYMENT</h1></legend>  
            <div >

                <label for="name">Name           :</label>
                <input type="text" id="name" name="name" value="<?php echo $_SESSION['Name'];?>"><br>
                <label for="pay">Set Payment        :</label>
                <input type="text" id="payment" name="payment"  value="<?php echo $_SESSION['SetPayment'];?>"><br>
              
            </div>
            
            <input type="submit" name="submit" value="modify">

        </div>
        </fieldset>
    </form>
	<center><?php include 'footer.php';?></center>
	
</form> 
			
		</body>
		
	</html>