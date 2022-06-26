<?php
session_start();
if (isset($_SESSION['uname'])) {
$name = $_SESSION['uname'];
	
	
}
else{
		$msg="error";
		header("location:login.php");
}
?>


<html>
<style>
  body{
    background-color: lightgray;
  }
  </style>

	<body>
		<class style="float:right;color:blue;"><?php echo "Logged in as ".$name; ?>&nbsp;|&nbsp;&nbsp;<a href='logout.php'>Logout</a></class>
		<h2 style="color:green";>COVID-19 Test Management System</h2>
		<br><br><hr><br><br>
		
		<class style="float:left;"><?php include 'Account.php';?></class>
		<fieldset>
						<legend> PROFILE:</legend>
						<br><br><h2>Welcome <?php echo $name; ?></h2>
		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
		
		
	</body>
</html>