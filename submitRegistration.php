<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles/style.css">
	<title>My Shopping Cart</title>
</head>
<body>
    <
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
	<fieldset><legend><h2>Personal Details</h2></legend>
	<?php
		echo "Name: ".$_POST["fname"]."&nbsp".$_POST["lname"]."<br/>";
		echo "Gender: ".$_POST["gender"]."<br/>";
		echo "Mobile: ".$_POST["mnumber"]."<br/>";
		echo "Email: ".$_POST["email"]."<br/>";
		echo "Address: ".$_POST["address"]."<br/>";
		echo "DOB: ".$_POST["dob"]."<br/>";
	?>
	</fieldset>
</center>
<!-- add a horizontal line (d)-->
<hr>
<!-- add a footer (g)-->
<h2>Tharsi Jegan</h2>
<h3 id="visit"><a href="https://courseweb.sliit.lk/">Visit this course</a></h3>
</body>
</html>