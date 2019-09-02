<?php include 'db.php';?>

<?php
if(isset($_GET['id'])){

	$quer = "SELECT * FROM `colm` where id=".$_GET['id'];

	$result = mysqli_query($con,$quer);
	if($result){
		$data = mysqli_fetch_assoc($result);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data Edit</title> <!-- just copy form  now see result --> 
</head>
<body>
	<form method="post" action="#">
		<table border="1" align="center">
			<tr>
				<th>Id:</th>
				<td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
			</tr>
			<tr>
				<th>Name:</th>
				<td><input type="text" name="name" value="<?php echo $data['name'];?>"></td>
			</tr>
			<tr>
				<th>Father Name:</th>
				<td><input type="text" name="fathername" value="<?php echo $data['fathername'];?>"></td>
			</tr>
			<tr>
				<th>Roll No:</th>
				<td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>"></td>
			</tr>
			<tr>
				<th>Age:</th>
				<td><input type="text" name="age" value="<?php echo $data['age'];?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Data Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<!-- update form -->

<?php 

if(isset($_POST['submit'])){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$fathername = $_POST['fathername'];
	$rollno = $_POST['rollno'];
	$age = $_POST['age'];

	$res = "UPDATE `colm` SET `id`='$id',`name`='$name',`fathername`='$fathername',`rollno`='$rollno',`age`='$age' WHERE `colm`.id=".$id;

	$result = mysqli_query($con,$res);
	if($result){
	 ?>
	 <script type="text/javascript">
	 	alert('data update');
	 	window.location.href='retrive.php';
	 </script>
	 <?php
	}
	
}


?>