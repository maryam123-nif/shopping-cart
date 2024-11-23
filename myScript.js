function loadData(name){
	
	if (name=="btn1"){
		document.getElementById("para").innerHTML="Iphone is the best in the world because it is fast and easy to use";
		document.getElementById("image1").src="images/iphone.jpeg";
	}
	else if (name=="btn2"){
		document.getElementById("para").innerHTML="Nokia is the best in the world because it is fast and easy to use";
		document.getElementById("image1").src="images/nokia.jpeg";
	}
	else if (name=="btn3"){
		document.getElementById("para").innerHTML="Samsung is the best in the world because it is fast and easy to use";
		document.getElementById("image1").src="images/samsung.jpeg";
	}
	else{
		alert("Invalid");
	}
}

function priceForLoop(){
	
var phone = ["Iphone = Rs 100000/=", "Samsung = Rs 60000/=", "Nokia = Rs. 10000/="];
	
	for ( i = 0, list="List of Average Prices<br/>";i < phone.length; i++){
		list += phone[i] + "<br>";
	}
	
	document.getElementById("para").innerHTML=list
		document.getElementById("image1").src="images/list.jpeg";
}

function productForInLoop() {
	var phone = [];
	phone["Iphone"] = "Rs. 100000/=";
	phone["Samsung"] = "Rs. 60000/=";
	phone["Nokia"] = "Rs. 10000/=";
	
	var list ="<b>List of Average Prices</b><br><br/>";
	
	for(var item in phone){
		list += item + " : " + phone[item] +"<br />";
	}
	
	document.getElementById("para").innerHTML=list
		document.getElementById("image1").src="images/avg.jpeg";
}

function priceHigher(){
	var phone = [];
	phone["Iphone"] = 1000;
	phone["Nokia"] = 500;
	phone["Samsung"] = 1500;
	phone["Iphone 8"] = 2500;
	phone["Iphone Xs max"] = 100;
	
	var list ="<b>List of high cost mobile phones</b><br><br/>";
	
	for(var item in phone){
		
		if(phone[item] > 1000){
			list += item + " : " + phone[item] +"<br />";
		}
	}
	
	document.getElementById("para").innerHTML= list;
		document.getElementById("image1").src="images/high.jpeg";
	
}
function priceLower(){
	var phone = [];
	phone["Iphone"] = 1000;
	phone["Nokia"] = 500;
	phone["Samsung"] = 1500;
	phone["Iphone 8"] = 2500;
	phone["Iphone Xs max"] = 100;
	
	var list ="<b>List of low cost mobile phones</b><br> <br/>";
	
	for(var item in phone){
		
		if(phone[item] < 1000){
			list += item + " : " + phone[item] +"<br />";
		}
	}
	
	document.getElementById("para").innerHTML= list;
		document.getElementById("image1").src="images/nokia1.jpeg";
}
function checkPassword(){
	if(document.getElementById("password").value != document.getElementById("rpassword").value){
		alert("Password Mismatch!");
		return false;
	}else{
		alert("Success!");
		return true;
	}
}
function enableButton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitBtn").disabled=false;
	}
	else{
		document.getElementById("submitBtn").disabled=true;
	}
}