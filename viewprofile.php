<?php include('Model/DATABASE.php') ?>
<?php
//session_start();
if (isset($_SESSION['uname'])) {

	
	
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
    <style>
      .container 
      {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .image 
      {
      	align-items: center;
      	text-align: right;
        flex-basis: 40%
      }
    </style>
	<body>
		<class style="float:right;color:blue;"><?php echo "Logged in as ".$_SESSION['uname']; ?>&nbsp;|&nbsp;&nbsp;<a href='logout.php'>Logout</a></class>
		<h2 style="color:green";>COVID-19 Test Management System</h2>
		<br><br><hr><br><br>
		
		<class style="float:left;"><?php include 'Account.php';?></class>
		<fieldset style="font-size: 25px;">
			<legend>PROFILE</legend><br>
				    
				<div class="container">
					<div>
						<?php 
							$uname = $_SESSION['uname'];
					        $sql = "SELECT * FROM users WHERE UserName='$uname'";
					        $result = mysqli_query($db, $sql);

					        if (mysqli_num_rows($result) > 0) 
					        {
					           while($row = mysqli_fetch_assoc($result)) 
					           {
					              echo "Name : " . $row["UserName"]. "<hr>";
					              echo "Email : " . $row["Email"]. "<hr>";
					              echo "Gender : " . $row["Gender"]. "<hr>";
					              //echo "Date of Birth : " . $row["DoB"]. "<hr>";
					           }
					        } 
						?>
					</div>

					<div class="image">
						<?php 
							$uname = $_SESSION['uname'];
					        $sql = "SELECT * FROM users WHERE UserName='$uname'";
					        $result = mysqli_query($db, $sql);

					        if (mysqli_num_rows($result) > 0) 
					        {
					           while($row = mysqli_fetch_assoc($result)) 
					           { 
					            echo "<img src='uploads/".$row['Image']."'height=150 width=150 >";
						       }
						    } 
						?>
												
						<!--&emsp;&emsp;&emsp;&emsp;&emsp;<img src="" alt="pp" width="100" height="100"><br><br>-->
						<div>
							<a href="profilepic.php">&emsp;Change&emsp;</a>
						</div>
					</div>
				</div>
				        

		</fieldset>
		><br><br><br><br><br><br><br><hr>
		
		
		
	</body>
</html>