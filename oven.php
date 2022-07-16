<!DOCTYPE html>
<html>
<head>
	<title>oven</title>
	<style type="text/css">
h3{
color: blue;}
h4{
color: red;}
body{
background-color:lightgrey;}
div{
background-color: ;
height:auto;
padding: 1px;
text-align: center;
}
h2{
text-align: center;}
h1{
color: green;}
.abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color: blue;
		}
</style>
</head>
<body>
	<h1>Oven</h1>
<h3>The burner not light</h3>
<P>Oven has a gas stove,you can change the range levels with the electric ignitions. but that ignition has not work.</P>
<img src="image16.jpg">
<h4>How to resolved, follow the Steps </h4>
<p>1-Lift off the burner grate,burner cap and burner base<br>
2-Clean any food debris out of the burner<br>
3-Clean the grate<br>
4-Check the wires connection<br>
<video controls autoplay muted > <source src="burner light.mp4" type="video/mp4">
</video>
</p>

<h3>The burner not heat</h3>
<p>Your range burners need electricity in order to heat up. sometimes, these burners gose bad. if you want the burners correckly work.</p>
<img src="image14.jpg">
<p>1-Switch out the faulty burner with one that you know works<br>
2-If the working burner heat up, the problem is your burner. replace it.<br>
3-If the burner not heat up.the problem is either the infinite switch or the socket. <br>
4-Test the burner again,if it still does not work, test and change the infinite switch.</p>
<video controls autoplay muted> <source src="not heat.mp4" type="video/mp4">  </video>


<h3>Can not shut the oven door</h3>
<p>An oven that won't shut is not safe for use.</p>
<img src="image17.jpg" height="300px" width="300px"> 
<h4>follow the steps</h4>
<p>1-Pull straight up and out on the door to remove it frome the oven. if it won't pull up,look to unscrew any screws holding the hinges in place inside the oven<br>
2-Check the hinge. replace them if necessary.<br>
3-Check for broken door spring. slide out the bottom drawer and look under the oven to see the door spring.<br>
4-Remove any broken spring with pliers.the ends should be wrapped around two bolts. replace them, rewraooing the ends of the new spring around the bolts.<br>
5-Replace the silicone or rubber gasket around the door</p>
<video autoplay controls muted> <source src="oven door is not work.mp4" type="video/mp4"> </video>

<h3>The interior light out</h3>
<img src="image15.jpg">
<h4>follow steps</h4>
<p>1-Remove the bulb cover, usually by giving it a quater-turn counter clock wise.<br>
2-Remove the old bulbb by pulling straight out.<br>
3-Using a dry cloth or gloves to handle the new bulb, replace the old bulb with one of the same type.</p>
<video controls autoplay muted> <source src="change bulb.mp4" type="video/mp4"> </video>

<br>
<br>
<h2> <a href="repairout.php" target="menu"><marquee behavior="style" direction="Lift" scrollamount="3">  contact with repairs man </marquee> </a> </h2>

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
	<button><a href="userlogout.php">logout</a></button> &nbsp;
	<button><a href="cooker.php">cooker</a></button> <br>
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