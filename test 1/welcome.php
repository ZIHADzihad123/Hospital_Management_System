<?php
session_start();
if (isset($_SESSION['Username'])) {
$name = $_SESSION['Name'];
	
	
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
						<br><br><h2>Welcome <?php echo $name; ?></h2>
		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
		<center style="color:red";><?php include 'footer.php';?></center>
		
		
	</body>
</html>