<?php
include('Model/DATABASE.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM pusers WHERE id=$id"; 
$result = mysqli_query($db,$query) ;
header("Location: load.php"); 
?>