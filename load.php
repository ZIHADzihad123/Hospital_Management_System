<?php include('Model/DATABASE.php') ?>

<html>
<!DOCTYPE html> 
<style>
  body{
    background-color: lightgray;
  }
  </style>
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
<body>
<class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>COVID-19 Test Management System</h2>
    <br><br>
<div >
  <h3> Search</h3>
</div>

<div  class="container" style="width:1366px;">
  <div >
    <div >
    </div>
   
      <input type="text"   id="search">
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>User Name</strong></th>
<th><strong>Password</strong></th>
<th><strong>Image</strong></th>
<th><strong>Gender</strong></th>
<th><strong>DoB</strong></th>
<th><strong>Get_Result</strong></th>
<th><strong>Clear Payment</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody id="output">
<?php
$count=1;
$sel_query="Select * from pusers ORDER BY id asc;";
$result = mysqli_query($db,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
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
<?php $count++; } ?>
</tbody>
</table>
</div>
    <div >
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'search.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>
</body>
</html>












