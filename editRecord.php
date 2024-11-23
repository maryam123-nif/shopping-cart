<?php
	include_once 'config.php';
?>
<?php
	$Item_id=$_GET['ItemID'];
	$Item_name=$_GET['itemName'];
	$Quantity=$_GET['quantity'];
    $Price=$_GET['price'];
	$Description=$_GET['description'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles/style.css">
	<title>My Shopping Cart</title>
</head>
<body>
<!-- add a logo (b) -->
<img src="images/logo.png" width="200" height="200" alt="Shopping cart logo" class="logo">
<!-- add a header (c)-->
<h1>Shopping Cart</h1>
	<!-- add a sub-header (c) -->
	<h3 align="center">The online Shopping Store</h3>
<!-- add a horizontal line (d)-->
<hr class="line1">
<!-- add a horizontal menu (e) -->
<ul class="nav">
<li class="list"> <a href="index.html">Home</a></li>
<li class ="list"> <a href="news.html">News</a></li>
<li class ="list"> <a href="register.html">Contact us</a> </li>
<li class ="list"> <a href="about.php">About us</a> </li>
</ul>
<br>
<center>
	<div style="border-style:groove; border-color:Darkblue;">
<form action="submitUpdateItems.php" method="GET">
<table border="0" width="25%">
	<tr>
		<td>Item ID </td>
		<td><input type="text" value="<?php echo "$Item_id"?>" name="itemID" readonly></td>
	</tr>
	<tr>
		<td>Item Name </td>
		<td><input type="text" value="<?php echo "$Item_name"?>" name="itemName"></td>
	</tr>
	<tr>
		<td>Quantity </td>
		<td><input type="text" value="<?php echo "$Quantity"?>" name="quantity"></td>
	</tr>
    <tr>
    <td>Price</td>
		<td><input type="text" value="<?php echo "$Price"?>" name="price"></td>
	</tr>
	<tr>
		<td>Description </td>
		<td><input type="text" value="<?php echo "$Description"?>" name="description"></td>
	</tr>
	<tr>
		<td></td>
		<td><br><input type="submit" value="Update" name="submit" class="bttn1" style="text-align:center;"></td>
	</tr>
	</table>
</form>
</center>
<!-- add a horizontal line (d)-->
<hr>
<!-- add a footer (g)-->
<center><h3>Created By : Maryam Nifal</h3>
	<h3><a href="https://courseweb.sliit.lk/my/">Visit this course</h3></center>
</body>
</html>