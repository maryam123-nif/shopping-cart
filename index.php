<?php
    include_once 'config.php';
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
<center><button class="bttn3"><a href="addItems.html">Add New Item</a></button></center>
<br>

<!-- add a table (f)-->
<div class="productData tbl">
<table  border = "1" width="100%" style = "border-style:groove; border-color: DarkBlue">
	<tr>
        <th class="col1">Item ID</th>
        <th class="col1">Item Name</th>
        <th class="col1">Quantity</th>
        <th class="col1">Price</th>
        <th class="col1">Description</th>
        <th class="col1">Edit</th>
        <th class="col1">Delete</th>
        
</tr>   
<?php
    $sql="SELECT Item_id, Item_name, Quantity, Price, Description FROM item";     
	
    $result = $conn->query($sql);

    if($result -> num_rows >0){
        while($row = $result->fetch_assoc())
        {
            echo"<tr><td>".$row["Item_id"]."</td><td>".$row["Item_name"]."</td><td>"
            .$row["Quantity"]."</td><td>".$row["Price"]."</td><td>"
            .$row["Description"]."</td>";
            echo"<td><a href = 'editRecord.php? ItemID=$row[Item_id] &itemName=$row[Item_name]  &quantity=$row[Quantity] &price=$row[Price] &description=$row[Description] '>Edit</a></td>";
            echo "<td><a href='deleteItems.php? ItemID=$row[Item_id] &itemName=$row[Item_name]  &quantity=$row[Quantity] &price=$row[Price]  &description=$row[Description]'>Delete</a></td></tr>";
    }
}
    else{
        echo"Not inserted";
    }

    echo"</table>";
    echo"</div>";
    
    mysqli_close($conn);
?>
<!-- add a horizontal line (d)-->
<hr>
<!-- add a footer (g)-->
 <center><h3>Created By : Maryam Nifal</h3>
	<h3><a href="https://courseweb.sliit.lk/my/">Visit this course</h3></center>
</body>
</html>