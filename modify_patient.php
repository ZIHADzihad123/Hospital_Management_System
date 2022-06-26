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
<!DOCTYPE HTML>
<html>
<style>
  body{
    background-color: lightgray;
  }
  </style>
	<class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>COVID-19 Test Management System</h2>
    <hr>

      <script src="JAVASCRIPT\modify js.js">
      </script>
	<body>
		
		     <p><span class="error">* required field</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <fieldset>
          <legend><strong>EDIT PROFILE</strong></legend>
            <?php 
                  $uname = $_SESSION['uname'];
                  $sql = "SELECT * FROM users WHERE UserName='$uname'";
                  $result = mysqli_query($db, $sql);

                  if (mysqli_num_rows($result) > 0) 
                  {
                     while($row = mysqli_fetch_assoc($result)) 
                     { 
            ?>
                        
          Name &emsp;&emsp;&emsp;: <input type="text" name="name" value="<?php echo $row["Name"]; ?>" id="name" autocomplete="off" onkeyup="checkName()" onblur="checkName()">
          <span id="nameErr">* <?php echo $nameErr;?></span>
          <br><hr>

          Email &emsp;&emsp;&emsp;: <input type="text" name="email" value="<?php echo $row["Email"]; ?>" id="email" onkeyup="checkEmail()" onblur="checkEmail()" >
          <span  id="emailErr">* <?php echo $emailErr;?></span>
          <br><hr>
           Gender &emsp; &emsp; :<br>
           <input type="radio" name="gender" value="female" <?php echo ($row['Gender'] == "female" ? 'checked="checked"': ''); ?> >Female
          <input type="radio" name="gender" value="male" <?php echo ($row['Gender'] == "male" ? 'checked="checked"': ''); ?> >Male   
          <input type="radio" name="gender" value="other" <?php echo ($row['Gender'] == "other" ? 'checked="checked"': ''); ?> >Other
          
          <span class="error">* <?php echo $genderErr;?></span>
          <br><hr>

          <!--  Date of Birth : <input type="date" name="dob" value="<?php echo $row["DoB"]; ?>">
          <span class="error">* <?php echo $dobErr;?></span> 
          <br><hr>
          <br> -->
            <?php            
                     }
                  } 
            ?>
          <input type="submit" name="edit_user" value="Submit">
        </fieldset>
        <br>

      </form>
	
	

			
		</body>
		
	</html>

	