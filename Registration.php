<?php include('Model/DATABASE.php') ?>
<!DOCTYPE HTML>
<html>
	
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	body{
		background-color: lightgray;
	}
	* {
  box-sizing: border-box;

}
	input[type=text],[type=radio],[type=password],[type=date], select, textarea {
  width: 100%;
  padding: 12px 25px;
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
  padding-top: 30px;
  padding-right: 210px;
  padding-left:210px;
  background-color: lightgray;
}
span
{
	color:red;
}
</style>

<script src="JAVASCRIPT\registration js.js">
</script>

<script >
	function showHint(str) {
if (str.length == 0) {
document.getElementById("txtHint").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "ameAzax.php?q=" + str, true);
xmlhttp.send();
}
}
</script>
	
	<body>
		<class><?php include 'header.php';?></class>

	</body>
	<body>
		
	<div class="containe">
	<p><span class="error">* required field</span></p>
	<form class="containe" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="post" onsubmit="validateform()">
		<fieldset>
			<legend><h1>REGISTRATION FOR RECEIPTIONIST:</h1></legend>
			<h2>Receiptionist's Name:</h2> <input type="text" name="name" id="name" autocomplete="off" onkeyup="showHint(this.value)" onkeyup="checkName()" onblur="checkName()">
			<span  id="txtHint"></span>
			<span class="error" id="nameErr">* <?php echo $nameErr;?></span>
			<br>
			<hr>
			<h2>E-mail:</h2> <input type="text" name="email"  id="email" onkeyup="checkEmail()" onblur="checkEmail()">
			<span class="error" id="emailErr">* <?php echo $emailErr;?></span>
			<br>
			<hr>
			<h2>User Name:</h2> <input type="text" name="uname" id="username" autocomplete="off" onkeyup="checkUserName()" onblur="checkUserName()">
			<span class="error" id="usernameErr">* <?php echo $unameErr;?></span>
			<br>
			<hr>
			<h2>Password:</h2> <input type="Password" name="pass" id="password" autocomplete="off" onkeyup="checkPass()" onblur="checkPass()">
			<span class="error" id="passErr">* <?php echo $passErr;?></span>
			<br>
			<hr>
			<h2>Confirm Password:</h2> <input type="Password" name="cpass" id="cpassword" autocomplete="off" onkeyup="checkConfirmPass()" onblur="checkConfirmPass()">
			<span class="error" id="cpassErr">* <?php echo $cpassErr;?></span>
			<br>
			<hr>
			<h2>Profile Picture:</h2> <input type="file" name="image"><br>
            <span class="error">* <?php echo $imageErr;?></span>
            <br>
            <hr>
			<fieldset>
				<legend><h1>Gender</h1> </legend>
				<h2>Gender:</h2>
				<input type="radio" name="gender" value="female"><h3>Female</h3>
				<input type="radio" name="gender" value="male"><h3>Male</h3>
				<input type="radio" name="gender" value="other"><h3>Other</h3>
				<span class="error">* <?php echo $genderErr;?></span>
			</fieldset>
			<hr>
			<fieldset>
				<legend><h2>Date Of Birth</h2></legend>
				<input type="date" name="dob" id="birthday" autocomplete="off"  onkeyup="checkDOB()" onblur="checkDOB()">
				<span class="error" id="birthdayErr">* <?php echo $dobErr;?></span>
				<br>
			</fieldset>
			<hr>
			<input type="submit" name="reg_user" value="Submit"> <input type="reset" value="Reset">
		</fieldset>
	</form>
</div>
	<?php
	
	echo $message;
	echo "<br>";
	?>
</body>
<hr>
<center><?php include 'footer.php';?></center>
</html>