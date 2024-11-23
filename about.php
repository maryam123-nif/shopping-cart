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
<li class ="list"> <a href="#">About us</a> </li>
</ul>
<center>
<?php
	#1
	define("companyName","Shopping Cart");
	
	#2
	echo"<h2>About ".companyName."</h2>";
	
	#3
	echo"<h4>This page is mainly about the ".companyName." website</h4>";
	
	#4
	$sold = 75;
	$total = 100;
	
	#5
	echo"The Shopping Cart,<br>";
	echo"No of Sold Items".$sold."<br>";
	echo"No of total Items".$total;
	
	echo"<h2>Output Using For Loop<br></h2>";
		
		echo "<h2><center><table border='2' width='75%'>
			<tr>
				<td>Number of Sold Items</td>
				<td>".$sold."</td>
			</tr>
			
			<tr>
				<td>Number of Total Items</td>
				<td>".$total."</td>
			</tr>
			</table>
		</center></h2>";
	
	#6
	function findPercentage(){
	$GLOBALS['percentage']=($GLOBALS['sold']/$GLOBALS['total'])*100;
	}
	
	#7
	findPercentage();
	
	
	#8
	echo "<h3>Percentage of Sold Items: ".$percentage."%</h3>";
	
	#9
	$today = "Today is ".date("l");//simple letter l
	echo "<h2>".$today."</h2>";
	
	#a)
	//getting the date format
	$c=date("Y-m-d");
	
	//Assign the cate date
	$currentDay=date_create($c);
	
	//Assign the ship date
	$shipDay = date_create("2019-09-21");
	
	//Get the difference between two dates
	$diff = date_diff($currentDay,$shipDay);
	
	//print the output
	echo"<h4>Number of days remaining for shipping : ".$diff->format("%R%a days")."</h4>";
	
	//checking the status
	if($diff->format("%R&a")>0){
		$status="To be Shipped";
	}
	else{
		$status="Shipped";
	}
	
	//Print the output
	echo"<h4><br>For ".$c." 24 items has ".$status."</h4>";
	
	
	#b
	function loopUsingFor(){
		$items = array ("Iphone Xs"=>"27","Iphone X"=>"30","Iphone XS Max"=>"12","Iphone XR"=>"29");
		
		$keys = array_keys($items);
		
		echo "<h2>Output Using For Loop</br></h2>";
		
		echo "<h2><center><table border='2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items</center></th></tr>";
		
		for($x = 0; $x< count($keys); $x++){
			echo "<tr><td><center>".$keys[$x]."</center></td><td><center>".$items[$keys[$x]]."</center></td></tr>";
		}
		echo "</center></table>";
		
	}
	loopUsingFor();
	
	
?>
</center>
<!-- add a horizontal line (d)-->
<hr>
<!-- add a footer (g)-->
 <center><p>Created By : Maryam Nifal</p>
	<p><a href="https://courseweb.sliit.lk/my/">Visit this course</p></center>
</body>
</html>