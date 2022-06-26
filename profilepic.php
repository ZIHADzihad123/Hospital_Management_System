<?php include('Model/DATABASE.php') ?>
<?php
  //session_start(); 

  if (!isset($_SESSION['uname'])) 
  {
   
    header('location:login.php');
  }
  ?>
<!DOCTYPE html>
<html>

<class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>COVID-19 Test Management System</h2>
    <hr>

<head>
    <style>
    .upPic img {
        height: 200px;
    }

    .propic {
        width: 100px;
    }
    </style>

    <title>Profile Picture</title>
</head>

<body>
    <div class="propic">

         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend><strong>PROFILE PICTURE</strong></legend>
          <img src="pp logo.png" width="100" height="100"><br>
          <input type="file" name="image">
          <p >* <?php echo $imageErr;?></p>
          <hr>
          <input type="submit" name="change_pp" value="Submit">
        </fieldset>
      </form>
        </fieldset>

    </div><br>


</body>

</html>