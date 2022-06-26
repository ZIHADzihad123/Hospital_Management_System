<?php
session_start();

// initializing variables
$message = "";
$name = $email = $uname = $pass = $cpass = $image =  $gender = $dob = "";
$pname = $pemail = $puname = $ppass = $pcpass = $pimage =  $pgender = $pdob = "";
$nameErr = $emailErr = $unameErr = $passErr = $cpassErr = $imageErr =  $genderErr = $dobErr = "";
$pnameErr = $pemailErr = $punameErr = $ppassErr = $pcpassErr = $pimageErr =  $pgenderErr = $pdobErr = "";
$crpass = $npass = $rnpass = $matchpass = "";
$pcrpass = $pnpass = $prnpass = $pmatchpass = "";
$crpassErr = $npassErr = $rnpassErr = "";
$pcrpassErr = $pnpassErr = $prnpassErr = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Lab-6');


//ALL PHP VALIDATIONS :

// RECEIPTIONIST REGISTRATION
if (isset($_POST['reg_user'])) 
{
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $cpass = mysqli_real_escape_string($db, $_POST['cpass']);
  $gender = isset($_POST['gender']) ? mysqli_real_escape_string($db, $_POST['gender']) : false;
  $dob = mysqli_real_escape_string($db, $_POST['dob']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  //Name
  if (empty($name)) 
  {
    $nameErr = "Cannot be empty";
    array_push($errors, "");
  } 
  else 
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{1,}$/",$name)) 
    {
      $nameErr = "User Name must contain at least two (2) characters";
      array_push($errors, "");
    } 

    elseif (!preg_match("/^[A-Za-z0-9 .-_]*$/",$name)) 
    {
      $nameErr = "UserName can contain alpha numeric characters, period, dash or underscore only";
      array_push($errors, "");
    }
  }

  //Email
  if (empty($email)) 
  {
    $emailErr = "Cannot be empty";
    array_push($errors, "");
  } 
  else 
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Must be a valid email address: anything@example.com";
      array_push($errors, "");
    }
  }

  //User Name
  if (empty($uname)) 
  {
    $unameErr = "Cannot be empty";
    array_push($errors, "");
  } 

  //Password
  if (empty($pass)) 
  {
    $passErr = "Cannot be empty";
    array_push($errors, "");
  }
  else
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{7,}$/",$pass)) 
    {
      $passErr = "Password must not be less than eight (8) characters";
      array_push($errors, "");
    }

    elseif (!preg_match("/^(?=.*?[#?!@$%^&*-]).{1,}$/", $pass)) 
    {
      $passErr = "Password must contain at least one of the special characters (@, #, $, %)";
      array_push($errors, "");
    }   
  }

  //Confirm Password
  if ($pass != $cpass) 
  {
    $cpassErr = "Confirm Password Not Matched";
    array_push($errors, "");
  }

  //Image
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
  {
    $imageErr = "Picture format must be in jpeg or jpg or png"; echo "<br>";
    array_push($errors, "");
    $uploadOk = 0;
  }

  if ($_FILES["image"]["size"] > 500000) 
  {
    $imageErr = "Picture size should not be more than 5MB"; echo "<br>";
    array_push($errors, "");
    $uploadOk = 0;
  }

  if ($uploadOk == 0) 
  {
    $imageErr = "Sorry, your picture was not uploaded. Choose a different picture"; echo "<br>";
    array_push($errors, "");
  } 
  else 
  {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
    {
      $imageErr = "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
      $image = $_FILES['image']['name'];
    } 
    else 
    {
      $imageErr = "Sorry, there was an error uploading your file."; echo "<br>";
      array_push($errors, "");
    }
  }
  
  //Gender
  if (empty($gender)) 
  {
    $genderErr = "At least one of them must be selected";
    array_push($errors, "");
  } 

  //Date Of Birth
  if (empty($dob)) 
  {
    $dobErr = "Cannot be empty";
    array_push($errors, "");
  } 
  /*else 
  {
    if (!preg_match("/^((19[5-9][3-8])-0[1-9]|1[0-2]-0[1-9]|[1-2][0-9]|3[0-1])$/",$dob)) 
    {
      $dobErr = "Must be valid numbers (dd: 1-31, mm: 1-12, yyyy: 1953-1998)";
    }
  }*/


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE UserName='$uname' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) // if user exists
  { 
    if ($user['UserName'] === $uname) 
    {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) 
    {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {
    //encrypt the password before saving in the database
  	$pass = md5($pass);
    $cpass = md5($cpass);

  	$query = "INSERT INTO users (Name, Email, UserName, Password, ConfirmPassword, Image, Gender,Dob ) 
  			  VALUES('$name', '$email', '$uname', '$pass', '$cpass', '$image', '$gender' ,'$dob')";
  	mysqli_query($db, $query);
  	$_SESSION['uname'] = $uname;
  	header('location:login.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) 
{
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($uname)) 
  {
    $unameErr = "Username Cannot be empty";
    array_push($errors, "");
  }
  if (empty($pass)) 
  {
    $passErr = "Password Cannot be empty";
    array_push($errors, "");
  }

  if (count($errors) == 0) 
  {
    $pass = md5($pass);
    $query = "SELECT * FROM users WHERE UserName='$uname' AND Password='$pass'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
    {
      $_SESSION['uname'] = $uname;
     
      header('location:welcome.php');
      if( isset($_POST['remember']) )
      {
         // Set cookie variables
         setcookie ("remember",$uname,time()+60);
      }
    }
    else 
    {
      array_push($errors, "Username or Password is incorrect.");
    }
  }
}

// EDIT USER
if (isset($_POST['edit_user']))
{
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  //$dob = mysqli_real_escape_string($db, $_POST['dob']);


    //Name
    if (empty($name)) 
    {
      $nameErr = "Cannot be empty";
      array_push($errors, "");
    } 
    else 
    {
      if (!preg_match("/^([A-Za-z0-9 .-_]).{1,}$/",$name)) 
      {
        $nameErr = "User Name must contain at least two (2) characters";
        array_push($errors, "");
      } 

      elseif (!preg_match("/^[A-Za-z0-9 .-_]*$/",$name)) 
      {
        $nameErr = "UserName can contain alpha numeric characters, period, dash or underscore only";
        array_push($errors, "");
      }
    }

    //Email
    if (empty($email)) 
    {
      $emailErr = "Cannot be empty";
      array_push($errors, "");
    } 
    else 
    {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
        $emailErr = "Must be a valid email address: anything@example.com";
        array_push($errors, "");
      }
    }
    
    //Gender
    if (empty($gender)) 
    {
      $genderErr = "At least one of them must be selected";
      array_push($errors, "");
    } 

    //Date Of Birth
    /*if (empty($dob)) 
    {
      $dobErr = "Cannot be empty";
      array_push($errors, "");
    } */
   /* else 
    {
      if (!preg_match("/^((19[5-9][3-8])-0[1-9]|1[0-2]-0[1-9]|[1-2][0-9]|3[0-1])$/",$dob)) 
      {
        $dobErr = "Must be valid numbers (dd: 1-31, mm: 1-12, yyyy: 1953-1998)";
      }
    }*/

  if (count($errors) == 0) 
  {
    $uname = $_SESSION['uname'];
    $query = "UPDATE users SET Name='$name', Email='$email', Gender='$gender'  WHERE UserName = '$uname'";
    if (mysqli_query($db, $query)) 
    {
      echo "Record updated successfully";
    } 
    else 
    {
      echo "Error updating record: " . mysqli_error($db);
    }
    $_SESSION['uname'] = $uname;
    
  }
}

// PATIENT REGISTRATION
if (isset($_POST['patient_user'])) 
{
  // receive all input values from the form
  $pname = mysqli_real_escape_string($db, $_POST['name']);
  $pemail = mysqli_real_escape_string($db, $_POST['email']);
  $puname = mysqli_real_escape_string($db, $_POST['uname']);
  $ppass = mysqli_real_escape_string($db, $_POST['pass']);
  $pcpass = mysqli_real_escape_string($db, $_POST['cpass']);
  $pgender = isset($_POST['gender']) ? mysqli_real_escape_string($db, $_POST['gender']) : false;
  $pdob = mysqli_real_escape_string($db, $_POST['dob']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  //Name
  if (empty($pname)) 
  {
    $pnameErr = "Cannot be empty";
    array_push($errors, "");
  } 
  else 
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{1,}$/",$pname)) 
    {
      $pnameErr = "User Name must contain at least two (2) characters";
      array_push($errors, "");
    } 

    elseif (!preg_match("/^[A-Za-z0-9 .-_]*$/",$pname)) 
    {
      $pnameErr = "UserName can contain alpha numeric characters, period, dash or underscore only";
      array_push($errors, "");
    }
  }

  //Email
  if (empty($pemail)) 
  {
    $pemailErr = "Cannot be empty";
    array_push($errors, "");
  } 
  else 
  {
    if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)) 
    {
      $pemailErr = "Must be a valid email address: anything@example.com";
      array_push($errors, "");
    }
  }

  //User Name
  if (empty($puname)) 
  {
    $punameErr = "Cannot be empty";
    array_push($errors, "");
  } 

  //Password
  if (empty($ppass)) 
  {
    $ppassErr = "Cannot be empty";
    array_push($errors, "");
  }
  else
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{7,}$/",$ppass)) 
    {
      $ppassErr = "Password must not be less than eight (8) characters";
      array_push($errors, "");
    }

    elseif (!preg_match("/^(?=.*?[#?!@$%^&*-]).{1,}$/", $ppass)) 
    {
      $ppassErr = "Password must contain at least one of the special characters (@, #, $, %)";
      array_push($errors, "");
    }   
  }

  //Confirm Password
  if ($ppass != $pcpass) 
  {
    $pcpassErr = "Confirm Password Not Matched";
    array_push($errors, "");
  }

  //Image
  $ptarget_dir = "uploads/";
  $ptarget_file = $ptarget_dir . basename($_FILES["image"]["name"]);
  $puploadOk = 1;
  $pimageFileType = strtolower(pathinfo($ptarget_file,PATHINFO_EXTENSION));

  if($pimageFileType != "jpg" && $pimageFileType != "png" && $pimageFileType != "jpeg") 
  {
    $pimageErr = "Picture format must be in jpeg or jpg or png"; echo "<br>";
    array_push($errors, "");
    $puploadOk = 0;
  }

  if ($_FILES["image"]["size"] > 500000) 
  {
    $pimageErr = "Picture size should not be more than 5MB"; echo "<br>";
    array_push($errors, "");
    $puploadOk = 0;
  }

  if ($puploadOk == 0) 
  {
    $pimageErr = "Sorry, your picture was not uploaded. Choose a different picture"; echo "<br>";
    array_push($errors, "");
  } 
  else 
  {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $ptarget_file)) 
    {
      $pimageErr = "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
      $pimage = $_FILES['image']['name'];
    } 
    else 
    {
      $pimageErr = "Sorry, there was an error uploading your file."; echo "<br>";
      array_push($errors, "");
    }
  }
  
  //Gender
  if (empty($pgender)) 
  {
    $pgenderErr = "At least one of them must be selected";
    array_push($errors, "");
  } 

  //Date Of Birth
  if (empty($pdob)) 
  {
    $pdobErr = "Cannot be empty";
    array_push($errors, "");
  } 
  /*else 
  {
    if (!preg_match("/^((19[5-9][3-8])-0[1-9]|1[0-2]-0[1-9]|[1-2][0-9]|3[0-1])$/",$dob)) 
    {
      $dobErr = "Must be valid numbers (dd: 1-31, mm: 1-12, yyyy: 1953-1998)";
    }
  }*/


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $puser_check_query = "SELECT * FROM pusers WHERE UserName='$puname' OR Email='$pemail' LIMIT 1";
  $presult = mysqli_query($db, $puser_check_query);
  $puser = mysqli_fetch_assoc($presult);
  
  if ($puser) // if user exists
  { 
    if ($puser['UserName'] === $puname) 
    {
      array_push($errors, "Username already exists");
    }

    if ($puser['Email'] === $pemail) 
    {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {
    //encrypt the password before saving in the database
    $ppass = md5($ppass);
    $pcpass = md5($pcpass);

    $pquery = "INSERT INTO pusers (Name, Email, UserName, Password, ConfirmPassword, Image, Gender,DoB ) 
          VALUES('$pname', '$pemail', '$puname', '$ppass', '$pcpass', '$pimage', '$pgender','$pdob' )";
    mysqli_query($db, $pquery);
    
  }
}

// CHANGE PASSWORD
if (isset($_POST['change_pass'])) 
{
  $crpass = mysqli_real_escape_string($db, $_POST['crpass']);
  $npass = mysqli_real_escape_string($db, $_POST['npass']);
  $rnpass = mysqli_real_escape_string($db, $_POST['rnpass']);

  // Current Password
  if (empty($crpass)) 
  {
    $crpassErr = "Cannot be empty";
    array_push($errors, "");
  }
  else
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{7,}$/",$crpass)) 
    {
      $crpassErr = "Password must not be less than eight (8) characters";
      array_push($errors, "");
    }

    elseif (!preg_match("/^(?=.*?[#?!@$%^&*-]).{1,}$/", $crpass)) 
    {
      $crpassErr = "Password must contain at least one of the special characters (@, #, $, %)";
      array_push($errors, "");
    }   
  }

  // New Password
  if (empty($npass)) 
  {
    $npassErr = "Cannot be empty";
    array_push($errors, "");
  }
  else
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{7,}$/",$npass)) 
    {
      $npassErr = "Password must not be less than eight (8) characters";
      array_push($errors, "");
    }

    elseif (!preg_match("/^(?=.*?[#?!@$%^&*-]).{1,}$/", $npass)) 
    {
      $npassErr = "Password must contain at least one of the special characters (@, #, $, %)";
      array_push($errors, "");
    }   
  }

  // Retype New Password
  if (empty($rnpass)) 
  {
    $rnpassErr = "Cannot be empty";
    array_push($errors, "");
  }
  else
  {
    if (!preg_match("/^([A-Za-z0-9 .-_]).{7,}$/",$rnpass)) 
    {
      $rnpassErr = "Password must not be less than eight (8) characters";
      array_push($errors, "");
    }

    elseif (!preg_match("/^(?=.*?[#?!@$%^&*-]).{1,}$/", $rnpass)) 
    {
      $rnpassErr = "Password must contain at least one of the special characters (@, #, $, %)";
      array_push($errors, "");
    }   
  }

  // Current Password match
  $uname = $_SESSION['uname'];
  $sql = "SELECT Password FROM users WHERE UserName='$uname'";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
     while($row = mysqli_fetch_assoc($result)) 
     {
      $matchpass = $row["Password"];
     }
  } 
  if (md5($crpass) != $matchpass) 
  {
    $crpassErr = "Current Password Not Matched";
    array_push($errors, "");
  }
  else
  {
    //current and new pass should not match
    if ($crpass == $npass) 
    {
      $npassErr = "New Password should not be same as the Current Password";
      array_push($errors, "");

    }
    //new and retype pass match
    elseif ($npass != $rnpass) 
    {
      $rnpassErr = "New Passwords Not Matched";
      array_push($errors, "");
    }
  }

  if (count($errors) == 0) 
  {
    $uname = $_SESSION['uname'];
    $npass = md5($npass);
    $query = "UPDATE users SET Password='$npass', ConfirmPassword='$npass' WHERE UserName = '$uname'";
    if (mysqli_query($db, $query)) 
    {
      echo "Password Changed successfully";
    } 
    else 
    {
      echo "Error Changing Password: " . mysqli_error($db);
    }
    $_SESSION['uname'] = $uname;
    
  }
}

// FORGOT PASSWORD
if (isset($_POST['forgot_pass'])) 
{
  $email = mysqli_real_escape_string($db, $_POST['email']);

  //Email
  if (empty($email)) 
  {
    $emailErr = "Cannot be empty";
    array_push($errors, "");
  } 
  else 
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Must be a valid email address: anything@example.com";
      array_push($errors, "");
    }
  }

  // Email match
  $sql = "SELECT UserName FROM users WHERE Email='$email'";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
     while($row = mysqli_fetch_assoc($result)) 
     {
      $uname = $row["UserName"];
     }
  }
  else
  {
    array_push($errors, "Email Not Matched");
  }

  if (count($errors) == 0) 
  {
    $_SESSION['uname'] = $uname;
   header('location:welcome.php');
  }
}

// CHANGE PROFILE PICTURE
if (isset($_POST['change_pp'])) 
{
  //Image
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
  {
    $imageErr = "Picture format must be in jpeg or jpg or png"; echo "<br>";
    array_push($errors, "");
    $uploadOk = 0;
  }

  if ($_FILES["image"]["size"] > 400000) 
  {
    $imageErr = "Picture size should not be more than 4MB"; echo "<br>";
    array_push($errors, "");
    $uploadOk = 0;
  }

  if ($uploadOk == 0) 
  {
    $imageErr = "Sorry, your picture was not uploaded. Choose a different picture"; echo "<br>";
    array_push($errors, "");
  } 
  else 
  {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
    {
      $imageErr = "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
      $image = $_FILES['image']['name'];
    } 
    else 
    {
      $imageErr = "Sorry, there was an error uploading your file."; echo "<br>";
      array_push($errors, "");
    }
  }

  if (count($errors) == 0) 
  {
    $uname = $_SESSION['uname'];
    $query = "UPDATE users SET Image='$image' WHERE UserName = '$uname'";
    if (mysqli_query($db, $query)) 
    {
      echo "Profile Picture Changed successfully";
    } 
    else 
    {
      echo "Error Changing Profile Picture: " . mysqli_error($db);
    }
    $_SESSION['uname'] = $uname;
    
  }
}

