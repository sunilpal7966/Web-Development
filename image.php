
<?php
if(isset($_POST['submit'])){

	$filename = $_FILES['pic']['name'];
	$tmpname = $_FILES['pic']['tmp_name'];

	$store = "picture/".$filename;
	
	if(move_uploaded_file($tmpname,$store)){
		?>
		<script type="text/javascript">
			alert('Image Uploaded Successfully');
		</script>
		<?php
	}
}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post"  enctype="multipart/form-data">
		Upload Image:<input type="file" name="pic"><br/>
		<input type="submit" name="submit" value="Upload Image">
	</form>

</body>
</html>