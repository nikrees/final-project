<html>
<head>
<style type="text/css">
body{
  background-color: lightgrey;
    text-align: center;} 
  .log{
    border: dotted;
    margin: 250px;
    background-color: white;
    font-size: 18px;
    border: darkblue;
    width: 250px;
    height:150px;}
    .abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color: blue;
    }
</style>
</head>
<body>
  <div class="log">
    <p>
<?php
SESSION_START();
$con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"myproject");

if (isset($_POST['username']))
 {
   
  $username=$_POST['username'];
 $nic=$_POST['nic'];

  
$sql ="SELECT email,nic,password FROM members WHERE email='$username'AND nic='$nic' ";
$result= mysqli_query($con , $sql);

while($row=mysqli_fetch_array($result))
{
echo "<br>"."<br>";
echo "Your password is:";
echo "<br>"."<br>";
echo $row['password'];}
}
else 
{
  echo "<br>"."<br>";
  echo "Invalid username and password";
}
mysqli_close($con);
?>
</p>
<button> <a href="findpass.php">Back</a></button>

</div>
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