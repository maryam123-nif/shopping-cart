<?php
	include_once 'config.php';
?>

<?php
if($_GET['submit']){
	$Item_id=$_GET['itemID'];
	$Item_name=$_GET['itemName'];
	$Quantity=$_GET['quantity'];
    $Price=$_GET['price'];
	$Description=$_GET['description'];
	
	
	$query = "UPDATE item SET
					Item_name='$Item_name',
					Quantity='$Quantity',
                    Price='$Price',
					Description='$Description'
					 
					WHERE Item_id='$Item_id'";
					
	$data = mysqli_query($conn,$query);
	
	if($data){
		echo "<script>alert('Record Updated!')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Error in Update')</script>";
	}
}
mysqli_close($conn);
?>
