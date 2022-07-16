<!doctype>
<html>
    <head>
    <title> Registration Form</title>
    <script type="text/javascript">
      function form(){
        var name=document.regform.name.value;
        var address=document.regform.address.value;
        var email=document.regform.email.value;
        var password=document.regform.password.value;
        var nic=document.regform.nic.value;
        var gender=document.regform.gender.value;
     var mobile= document.regform.mobile.value;
     var education=document.regform.education.value;
if(name==""){
     alert("Please Enter Your Name");
     return false;}
else if(address==""){
     alert("Please Enter Your Address");
     return false;}
else if(email==""){
     alert("Please Enter Your E-mail");
     return false;}
else if(password.length<6){
     alert("Please Enter Your  Password. must be 6 characters.");
     return false;}
else if(nic==""){
     alert("Please Enter Your Nic no");
    return false;}
else if(gender==""){
    alert("Please Enter Your Gender");
     return false;}
else if(mobile==""){
    alert("Please Enter Your Mobile no");
     return false;}
else if(education==""){
      alert("Please Enter Your Education");
     return false;} 
     return true; 
}
    </script>
	<style>
	body{background-color:lightgray;
    text-align: center;  
  }
 div{
  padding:20px ;
  height: auto;
  width: 400px;
  background-color: white;
margin-left:auto;
margin-right: auto;
background-color: grey;
}
textarea{
text-align:center;}
form{
}
table{
color:white;
}
input{
text-align: center;
color: blue;}
h3{
text-align: center;}

.abt{
font-size: 16px;
background-color: lightgrey;
padding: 5px;
width: auto;
color: blue;
        }
	</style>
    </head>
    <body>
    <div>
      
    <center><h1>Fill the form before contect with them <br><u> Registration form</h1></center></u>
	<form name="regform" onsubmit="return form()" method="POST" action="sqlconnect.php" >
    
        <table align="center"cellpadding="10">
        <tr>
            <td>Name with initial</td>
            <td><input type="text" name="name"  id="name"  placeholder="Enter name and initial" maxlength="30" >
                
                </td>
            </tr>
        
		<tr>
            <td>Address</td>
            <td><input type="textbox" name="address" id="address" placeholder="Enter current address" rows="4" cols="30"/></td>
            </tr>
            
            
           
			<tr>
            <td>E-mail</td>
            <td><input type="email" id="email" name="email" placeholder="Enter email" maxlength="30"></td>
            </tr>
			
			<tr>
            <td>Password</td>
            <td><input type="text" id="password" name="password" maxlength="6"
              placeholder="Enter 6 digi"></td>
            </tr>
			
			<tr>
            <td>NIC No</td>
            <td><input type="text" id="nic" name="nic" placeholder="Enter Nic no" maxlength="12" ></td>
            </tr>
			
        
            
             <tr>
            <td>Gender</td>
            <td>Male <input type="radio" id="male" name="gender" value="Male">
                Female <input type="radio" name="gender" id="female" value="Female">
			         	Other <input type="radio" name="gender" id="other" value="other" >
                </td>
            </tr> 
       
            
            <tr>
            <td>Mobile</td>
            <td><input name="mobile" id="mobile"
             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
             type = "number" maxlength = "10" placeholder="Enter your current no">
            </td></tr>



           <tr>
            <td>Education Qualification</td>
            <td><input type="text" id="education" name="education" placeholder="o/l,a/l or other qualification" maxlength="30"></td>
            </tr>
            
            
            
            
            </tr>
            
            <tr>
            <td colspan="2" align="center">
              <input type="submit" name="submit" id="submit" value="Register"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="Reset"  value="Reset">
                </td>
            </tr>
        </table>
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
<button><a href="loginpage.php">Login</a></button>
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
