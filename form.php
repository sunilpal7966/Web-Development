<?php
include 'db.php';
 // db connection
 
 ?>
 <?php

if(isset($_POST['submit'])){                // isset means submit set or not
	$name=$_POST['name'];
	$fathername= $_POST['fathername'];
	$rollno=$_POST['rollno'];
	$age = $_POST['age'];


	$result= "INSERT INTO `colm`( `name`, `fathername`, `rollno`, `age`) VALUES ('$name','$fathername','$rollno','$age')";
	          

	$save = mysqli_query($con , $result);   // $con db connection variable
	
	if($save){
		?>
		<script type="text/javascript">             //javascript page redirect
			alert('data insert ');
			window.location.href='retrive.php';
		</script>
		<?php
		
	}else{
		echo "error";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Html Fomr</title>
</head>
<body>
	<h2 align="center">User Information</h2>
	<form method="post" action="#">
		<table border="1" align="center">
			<tr>
				<th>Name:</th>
				<td><input type="text" name="name" placeholder="Enter Your Name"></td>
			</tr>
			<tr>
				<th>Father Name:</th>
				<td><input type="text" name="fathername" placeholder="Enter Your Father Name"></td>
			</tr>
			<tr>
				<th>Roll No:</th>
				<td><input type="text" name="rollno" placeholder="Enter Your Roll No"></td>
			</tr>
			<tr>
				<th>Age:</th>
				<td><input type="text" name="age" placeholder="Enter Your Age"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Send Data"></td>
			</tr>
		</table>
	</form>

</body>
</html>

<!-- Update Form -->