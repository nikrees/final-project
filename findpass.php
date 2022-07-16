<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		background-color: lavender;}
div{
text-align: center;
padding:50px;
color: blue;
}
.abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
    }
input{text-align: center;
color: blue;}
</style>

<script>
 function flog() {
 	var nic = document.form1.nic.value;

 	var email= document.form1.username.value;

 	 if (nic.length<9) {
 	 	alert("NIC number must be 9 Digit or 12 Digit ");
 	 	return false;
 	 }
 	 else if (email=="") {
 	 	alert("Enter your Email ");
 	 	return false;
 	 }
 	 	return true;

 }
</script>
</head>
<body>
	<div>
<form method="POST" action="forget.php" name="form1" onsubmit="return flog()">
<p>Enter your Nic no:</p>
<input type="text" name="nic" maxlength="12" placeholder="Enter NIC no" > <br>
<p>Enter your Email:</p>
<input type="email" name="username" placeholder="enter email"> <br> <br>
<input type="submit" name="submit"><br> <br>
<input type="reset" name=""><br> <br>
<button><a href="1st.php" > Back </a></button>
</form>
</div>
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