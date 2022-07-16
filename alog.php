
<!DOCTYPE html>
<html>
<head><title>Login</title>
  
<script>  
function validatelogin(){  
var name=document.adck.name.value;  
var password=document.adck.password.value;  
  
if (name==null || name==""){  
  alert("Please Enter Your username");  
  return false;  
}else if(password.length<8){  
  alert("Password must be at least 8 characters leng.");  
  return false;  
  }  
}  
</script>
<style type="text/css">
body{
  background-color:lightblue;
  text-align: center;

}
input{
text-align: center;
color: blue;}
h1{
text-align: center;}
form{
text-align:center ;
padding-top:25px;}
.log{
padding: 30px;
display: inline-block;
}
h4{
text-align: center;}
.about{
background-color: ;
}
h1{
color: green;}
.abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color: blue;
    }
    .abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color: blue;
    }
<br>
</style>  
</head>
<body>  
  <h1><u> Admin <br>Login </u> </h1>
   <p align="left"><?php if (isset($_GET['mes'])) {
   echo $_GET['mes'];
 }
 ?> 
 <div class="log">
 
<form name="adck" method="post" action="adout.php"  onsubmit="return validatelogin()" > 
<table> <tr>  
<td>name:</td>
<td><input type="text" name="name" placeholder="Enter Name"></td></tr>
<tr> <td>Password: </td><td> <input type="password" name="password" placeholder="Enter password" maxlength="8"> </td></tr></table>
<input type="submit" value="Login">  
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
