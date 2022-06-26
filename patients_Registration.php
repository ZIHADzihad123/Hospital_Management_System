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
		
	
	<class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>COVID-19 Test Management System</h2>
    <hr>
	<body>
		
	<div class="containe">
	<p><span class="error">* required field</span></p>
	<form class="containe" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
		<fieldset>
			<legend><h1>REGISTRATION FOR PATIENT:</h1></legend>
			<h2>Patient's Name:</h2> <input type="text" name="name">
			<span class="error">* <?php echo $pnameErr;?></span>
			<br>
			<hr>
			<h2>E-mail:</h2> <input type="text" name="email">
			<span class="error">* <?php echo $pemailErr;?></span>
			<br>
			<hr>
			<h2>User Name:</h2> <input type="text" name="uname">
			<span class="error">* <?php echo $punameErr;?></span>
			<br>
			<hr>
			<h2>Password:</h2> <input type="Password" name="pass">
			<span class="error">* <?php echo $ppassErr;?></span>
			<br>
			<hr>
			<h2>Confirm Password:</h2> <input type="Password" name="cpass">
			<span class="error">* <?php echo $pcpassErr;?></span>
			<br>
			<hr>
			<h2>Profile Picture:</h2> <input type="file" name="image"><br>
            <span class="error">* <?php echo $pimageErr;?></span>
            <br>
            <hr>
			<fieldset>
				<legend><h1>Gender</h1> </legend>
				<h2>Gender:</h2>
				<input type="radio" name="gender" value="female"><h3>Female</h3>
				<input type="radio" name="gender" value="male"><h3>Male</h3>
				<input type="radio" name="gender" value="other"><h3>Other</h3>
				<span class="error">* <?php echo $pgenderErr;?></span>
			</fieldset>
			<hr>
			<fieldset>
				<legend><h2>Date Of Birth</h2></legend>
				<input type="date" name="dob">
				<span class="error">* <?php echo $dobErr;?></span>
				<br>
			</fieldset>
			<hr>
			<input type="submit" name="patient_user" value="Submit"> <input type="reset" value="Reset">
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