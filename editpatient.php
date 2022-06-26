<?php
include('Model/DATABASE.php');
$id=$_REQUEST['id'];
$query = "SELECT * from pusers where id='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>

<style>
  body{
    background-color: lightgray;
  }
  </style>

<head>
<meta charset="utf-8">
<title>Update Record</title>

</head>
<body>
<div >

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$submittedby = $_SESSION["uname"];
$update="update pusers set 
Name='".$name."', Email='".$email."'
 where id='".$id."'";
mysqli_query($db, $update) ;
$status = "Record Updated Successfully. </br></br>
<a href='load.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}

else {
?>
<div class="containe">
<form class="containe" name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Name'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter Email" 
required value="<?php echo $row['Email'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>