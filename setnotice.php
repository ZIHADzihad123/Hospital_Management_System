<!DOCTYPE HTML>
<html>
<head>
	  <link rel="stylesheet" href="welcome.php">
</head>
  <?php
         $message='';
		$error = '';
			if(isset($_POST["submit"]))
		{

			if(file_exists('setnotice.json'))
				{
					$current_data = file_get_contents('setnotice.json');
		            $array_data = json_decode($current_data, true);
		 $extra = array(
		'date'       =>     $_POST["dob"],
		'name'              =>     $_POST['uname']
		
		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		if(file_put_contents('setnotice.json', $final_data))
		{
	

	}
	header('Location:welcome.php');
	 echo '<style}>  .show{display:block;}</style>';
	}
	else
	{
	$error = 'JSON File not exits';
	}
	}
	
	?>
	<body>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Enter Notice:</h2> <input type="textbox" name="uname" id="username" autocomplete="off" >			
    <input type="date" name="dob" id="birthday" autocomplete="off"  >
    <input type="submit" name="submit" value="Submit"> 				
	</form>
	<?php
	echo $error;
	echo "<br>";
	echo $message;
	echo "<br>";
	?>
</body>
</html>