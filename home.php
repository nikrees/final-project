<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
	div{
		font-size: 20px;
		color:lightcyan;
		font-st
	}
.topnav {
  background-color:lightseagreen;
  overflow: hidden;
}
.topnav a {
  float:right;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  height:15px;
  padding-top:5px;
}
.topnav a:hover {
  background-color:lightblue;
  color:lightsalmon;
}
.img1{
width: 30px;
height: 30px;
padding: 10px;}
table{
text-align: center;
	border: none;
	border-spacing: 38px;
	}
	table.border{background-color: gray;}
#btn1{background-color: green; }
#btn2{background-color: brown;}
#btn3{background-color: yellow;}
a{
	color: white;}
	h2{
		text-align: center;
	}
	.abt{
		padding: 1px;
		height:auto;
		text-align: center;
		color: black;
		
	}
	marquee{
		color: green;
		font-size: 25px;}
	#p0{
		font-size: 25px;}
		
		.abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color: blue;
		}
	
	</style>
</head>
<body>
<div class="topnav">
	<p id="p0"><img class="img1" src="logo.jpg"> <b>Solution For  Electric Device </b> </p>
	<a href="alog.php">Admin</a>
 <a href="repairsregister.php">Add Repairs Man</a>
  <a href="registrationform.php">Contact Repairs Mans</a>
  <a href="loginpage.php">Login</a>
 </div>
  <marquee behavior="style"><img src="tool.jpg" width="20px" height="20px"><img src="tool1.jpg" width="20px" height="20px"><img src="tool2.jpg" width="20px" height="20px"> FIND SOLUTION FOR ELECTRIC DEVICES <img src="tool.jpg" width="20px" height="20px"><img src="tool1.jpg" width="20px" height="20px"><img src="tool2.jpg" width="20px" height="20px">FIND SOLUTION FOR ELECTRIC DEVICES <img src="tool.jpg" width="20px" height="20px"><img src="tool1.jpg" width="20px" height="20px"><img src="tool2.jpg" width="20px" height="20px"> FIND SOLUTION FOR ELECTRIC DEVICES <img src="tool.jpg" width="20px" height="20px"><img src="tool1.jpg" width="20px" height="20px"><img src="tool2.jpg" width="20px" height="20px">FIND SOLUTION FOR ELECTRIC DEVICES </marquee>
<img src="home.jpg">
<table>
	<tr>
<td><img src="image5.jpg" width="200px" height="200px"><br><button id="btn1"><a href="cooker.php">cooker</a></button></td>
<td><img src="image16.jpg"  width="200px" height="200px"><br> <button id="btn2"><a href="oven.php">oven</a></button></td>
<td><img src="fridge.jpg"  width="200px" height="200px"><br><button id="btn3">fridge</button></td></tr>
<tr>
	<td><img src="ledlight.jpg"  width="200px" height="200px"><br><button id="btn3">light</button></td>
<td><img src="standfan.jpg"  width="200px" height="200px"><br><button id="btn2">stand fan</button></td>
<td><img src="cilingfan.jpg"  width="200px" height="200px"><br><button id="btn1">ceiling fan</button></td></tr>
<tr>
	<td><img src="washingmachine.jpg"  width="200px" height="200px"><br><button id="btn2">washing machine</button></td>
<td><img src="mixer.jpg"  width="200px" height="200px"><br><button id="btn1">mixer</button></td>
<td><img src="waterpupm.jpg"  width="200px" height="200px"><br><button id="btn2">water pupm</button></td></tr>
<tr>
	<td><img src="heater.jpg"  width="200px" height="200px"><br><button id="btn1">water heater</button></td>
<td><img src="aircooler.jpg" width="200px" height="200px"><br><button id="btn3">air cooler</button></td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="abt">
<h>About Us</h>
<p>Mr.Abdul Lafir Muhammed Nikrees<br>
Student of Sri Lanka Institute of Advance Technological Education<br>
(SLIATE)<br>
Project of Final year<br>
Higher National Diploma in Information Technology<br></p>
<p>contact us</p>
<br>
<br>
<a href="http://m.facebook.com/nikrees.nikrees"><img src="Facebook.png" height="30px" width="30px"></a> <a href="https://wa.me/qr/YIYMWG5NDQ43I1"> <img src="whatsapp.jpg" height="35px" width="35px"></a> <a href="https://nikrees97@gmail.com"> <img src="gmail.png" height="30px" width="30px"></a> <a href=""><img src="phone.png" height="30px" width="35px"></a><br>
<br><br>

<p>our institute <br>
SLIATE Mannar <br>
thalaimannar road,mannar</p>
<br>
<br><br>

<?php
date_default_timezone_set('asia/kolkata');
$date= date('d/m/y');
$time= date('h:i');
echo "calendar"."<br>".$date."<br>".date('D')."day";
echo "<br>"."Time is"."<br>".date('h:ia');
?>
<p align="left">copyright@2021my website</p>
</div>
</body>
</html>
