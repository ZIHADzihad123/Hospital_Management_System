<?php include('Model/DATABASE.php') ?>
<?php
  //session_start(); 

  if (!isset($_SESSION['uname'])) 
  {
    $_SESSION['msg'] = "You must log in first";
    echo $_SESSION['msg'];
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<style>
  body{
    background-color: lightgray;
  }
  </style>


<class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>COVID-19 Test Management System</h2>
    <br><br><hr><br><br>

<body>
   
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <form method="post" action="I. CHANGE PASSWORD.php">
          <fieldset>
            <legend><strong>CHANGE PASSWORD</strong></legend>
            Current Password :&emsp;&emsp;<input type="password" name="crpass">
            <span class="error"><?php echo $crpassErr;?></span>
            <br><br>
            <span style="color: green;">New Password : &emsp;&emsp;&emsp;</span><input type="password" name="npass">
            <span class="error"><?php echo $npassErr;?></span>
            <br><br>
            <span class="error">Retype New Password : </span><input type="password" name="rnpass">
            <span class="error"><?php echo $rnpassErr;?></span><br><hr>
            <input type="submit" name="change_pass" value="Submit">
          </fieldset>
        </form>
  <br><br><hr>
  

</body>

</html>