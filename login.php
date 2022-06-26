<?php include('Model/DATABASE.php') ?>
<!DOCTYPE HTML>
<html>
<style>
	body{
		background-color: lightgray;
	}
	* {
  box-sizing: border-box;

}
	input[type=text],[type=radio],[type=password],[type=date], select, textarea,legend {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;
}

label {
 font-size: 20px;
 font-color:red;
  
  
}

input[type=submit] {
  background-color: grey;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: darkgrey;
}

	.containe {
  border-radius: 5px;
  
  padding: 70px;
  background-color: lightgray;
}
span
{
	color:red;
}
</style>


<script src="JAVASCRIPT\login js.js">
	</script>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 </head>
	<body>
		<class><?php include 'header.php';?></class>
		<hr>

	</body>
	<body>
		
	<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="validateform()">
	   <table align="center" class="container">
		

			<tr>

				<th colspan="2"><h2>RECEIPTIONIST LOGIN</h2></th>
			</tr>
			<?php if(isset($msg)){?>
			<tr>
				<td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
			</tr>
			<?php } ?>
			<tr>

				<td colspan="2" align="center" valign="top"><span class="error"><?php include('errors.php'); ?></span></td> 
			</tr>
			<tr>

                 
				<td > <h2>username</h2></td>
				<td><input type="text" name="uname" id="username" autocomplete="off" onkeyup="checkUserName()" onblur="checkUserName()">
				 <span id="usernameErr"><?php echo $unameErr ;?></span></td>
			</tr>
			<tr>
				<td><h2>password</h2></td>
				<td><input type="password" name="pass" id="password" autocomplete="off" onkeyup="checkPass()" onblur="checkPass()">
				 <span id="passErr"><?php echo $passErr;?></span></td>
			</tr>
			<tr>
				<td align="right" colspan="2"><input type="submit" name="login_user" value="login"></td>
			</tr>

	</table>
	<input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      
      <span class="psw">Forgot <a href="forgotpass.php">password?</a></span>
    </div>
	
	<center><?php include 'footer.php';?></center>
	
</form> 
			<script src="./app.js"></script>
		</body>
		
	</html>


