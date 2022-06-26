<?php
session_start();
if (isset($_SESSION['Username'])) {

$password=$_SESSION['Password'];
$email=$_SESSION['Email'];
$name=$_SESSION['Name'];
$gender=$_SESSION['Gender'];
$dob= $_SESSION['Dob'];
	
	
}
else{
		$msg="error";
		header("location:login.php");
}
?>
<html>
	<body>
		<class style="float:right;color:blue;"><?php echo "Logged in as ".$name; ?>&nbsp;|&nbsp;&nbsp;<a href='logout.php'>Logout</a></class>
		<h2 style="color:green";>Azex Company</h2>
		<br><br><hr><br><br>
		
		<class style="float:left;"><?php include 'Account.php';?></class>
		<fieldset>
						<legend> PROFILE:</legend>
						<br><br>
						<p>Name          : <?php echo $name; ?></p>
						<p>Email         : <?php echo $email; ?></p>
						<p>Gender        : <?php echo $gender; ?></p>
						<p>Date of Birth : <?php echo $dob; ?></p>


		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
		<center style="color:red";><?php include 'footer.php';?></center>
		
		
	</body>
</html>