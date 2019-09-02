<?php include 'db.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Retrive</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<h2 align="center"> Data Retrive In Database</h2>
	<button><a href="form.php"> Home page</a></button>
	<div class="container">
		<div class="jumbotron">
	<table class="table table-striped table-bordered"> <!--class "table table-striped table-bordered/table-hover" -->
		<tr>
			<th>ID:</th>
			<th>NAME:</th>
			<th>FATHER NAME:</th>
			<th>ROLL NO:</th>
			<th>AGE:</th>
			<th>ACTION:</th>
		</tr>
		<?php 

		$que = "SELECT * FROM `colm`";

		$res = mysqli_query($con ,$que);
		$row = mysqli_num_rows($res);
		while($data =mysqli_fetch_assoc($res)){
			extract($data);
			?>
			<tr>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['name'];?></td>
				<td><?php echo $data['fathername'];?></td>
				<td><?php echo $data['rollno'];?></td>
				<td><?php echo $data['age'];?></td>
				<td><button><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></button> 
				   <button> <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></button></td>
			</tr>
			<?php
		}

		?>
	</table>
</div>
</div>

</body>
</html>