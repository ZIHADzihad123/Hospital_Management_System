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
    <script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "setnotice.php?q=", true);
  xhttp.send();
}
</script>

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
	<body>
		<class style="float:right;color:blue;"><?php echo "Logged in as ".$name; ?>&nbsp;|&nbsp;&nbsp;<a href='logout.php'>Logout</a></class>
		<h2 style="color:green";>COVID-19 Test Management System</h2>
		<br><br><hr><br><br>
		
		<class style="float:left;"><?php include 'Account.php';?></class>
		<fieldset>
						<legend> PROFILE:</legend>
						<span class="show" style="display: none">Notice Added Successfully</span>
						<br><br><h2>Welcome <?php echo $name; ?></h2>
		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>

		<div id="demo">      
        <button type="button" onclick="loadDoc()">Set Notice</button>
         </div>
		
		
		
	</body>
</html>