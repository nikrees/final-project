


<!DOCTYPE html>
<html>
<head><title>Repairs mans</title>
	<style type="text/css">
	body{ 
		text-align: center;
		background-color: lightgrey;
		padding: 1px;
		}
		.dv1{
			background-color:white;
			height: auto;
			width: auto;
			color: blue;
			font-size: 20px;
			padding:10px;
			text-align: center;
		}
		.p1{
			color: brown;
		font-size:50px;
		text-align: center;
		height: 20px;}
	.abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color: blue;
		}
		
</style>
</head>
<body>
	 <p align="right"><?php if (isset($_GET['mes'])) {
   echo $_GET['mes'];
 }
 ?></p>
<marquee behavior="scroll" direction="left"><p class="p1"> <img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details<img src="man.jpg" width="40px" height="60px">Available Repairs Details</p></marquee>
	<div class="dv1">
<?php
$con = mysqli_connect("localhost","root","");
   if (!$con) { 
   		die(mysqli_errno());
   	}
   	 mysqli_select_db($con,"myproject");

$sql =" SELECT name,address,email,mobile FROM repairs";
$result=mysqli_query($con,$sql); ?>


	
	<?php
while($row=mysqli_fetch_array($result))
 {
 	
	echo "Shop Name:- ".$row['name']."<br>";
	echo "Shop Address:- ".$row['address']."<br>";
	echo "Email id:- ".$row['email']."<br>";
	echo "Phone No:- ".$row['mobile']."<br>";

	echo "<br>"."<br>"; 


}

mysqli_close($con);
?>
</div><br><br>
<button><a href="userlogout.php">logout</a></button>
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