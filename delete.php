<?php include 'db.php';


if(isset($_GET['id'])){


	$DeleteQuery = "DELETE FROM `colm` WHERE id =".$_GET['id'];

	$res=mysqli_query($con,$DeleteQuery);

	if($res){
		?>
		<script type="text/javascript">
			alert('Data Delete Successfully');
			window.location.href="retrive.php";
		</script>
		<?php
	}
}

?>

