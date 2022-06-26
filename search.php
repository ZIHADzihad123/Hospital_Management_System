<!DOCTYPE html> 
<html>
<body>
	<table>
<?php

// Create connection
include('Model/DATABASE.php');
$sql = "SELECT * FROM pusers WHERE Name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) { ?>
		<tr>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["Email"]; ?></td>
<td align="center"><?php echo $row["UserName"]; ?></td>
<td align="center"><?php echo $row["Password"]; ?></td>
<td align="center"><?php echo $row["Image"]; ?></td>
<td align="center"><?php echo $row["Gender"]; ?></td>
<td align="center"><?php echo $row["DoB"]; ?></td>
<td align="center"><?php echo $row["Get_Result"]; ?></td>
<td align="center"><?php echo $row["Clear_Payment"]; ?></td>

<td align="center">

<a href="editpatient.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>

<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td> 
</tr>
<?php 
}
}
else{
	echo "<tr><td>0 results found</td></tr>";
    } 
?>


</table>
</body>
</html>