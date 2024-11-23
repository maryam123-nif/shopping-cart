<?php
	include_once 'config.php';
?>
<?php

	$Item_id = $_GET['ItemID'];
	
	$query = "delete from item where Item_id = '$Item_id'";
	
	$data = mysqli_query($conn,$query);
	
	if($data){
		echo "<script> alert('Record Updated!'</script>)";
		header("Location:index.php");
	
	}
	else{
		echo"<script>alert('Error in Update')</script>";
	}

mysqli_close($conn);
?>