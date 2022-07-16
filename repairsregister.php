<!doctype>
<html>
    <head>
    <title>Repairs Man Registration Form</title>

	<style>

	body{background-color:lightgray;
    text-align: center;  }
 .frm{
  padding:20px ;
  height: auto;
  width: 400px;
  background-color:gray;
margin-left:auto;
margin-right: auto;

}
textarea{
text-align:center;}
form{
}
table{
color: white;
border-style: groove;
}
tr,td{
    }
input{
text-align: center;}
h3{
text-align: center;}

.abt{
font-size: 16px;
background-color: lightgray;
padding: 5px;
color:blue;
        }
        input{
            color: blue;
    }
	</style>
    <script type="text/javascript">
        function vali(){
            var name= document.repairs.name.value;
            var address= document.repairs.address.value;
            var email= document.repairs.email.value;
            var password= document.repairs.password.value;
            var mobile= document.repairs.mobile.value;

        if (name=="") {
            alert("Please Enter Shop Name");
            return false;}
        else if (address==""){
            alert("Please Enter Address");
            return false; }
        else if (email=="") {
            alert("Please Enter E-mail");
            return false;}
        else if (password=="") {
            alert("Please Enter 6 digit password");}
        else if(mobile==""){
            alert("Please Enter Mobile Number");
            return false;}
            return true;
        }
    </script>
    </head>
    <body>


    <div class="frm">
      <center><u> <h2><b>Repairs Man Registration form </b></h2></h1></center></u>
	<form name="repairs" method="POST" action="connect.php" onsubmit="return vali()">
    
        <table align="center"cellpadding="10">
        <tr>
            <td> Shop Name</td>
            <td><input type="text" name="name"   placeholder="Enter name" maxlength="30"  >
                
                </td>
            </tr>
        
		<tr>
            <td>Address</td>
            <td><textarea name="address" placeholder="Enter shop address" rows="4" cols="30" ></textarea></td>
            </tr>
            
            
           
			<tr>
            <td>E-mail</td>
            <td><input type="email"  name="email" placeholder="Enter email" maxlength="30" ></td>
            </tr>
			
			<tr>
            <td>Password</td>
            <td><input type="text"  name="password" maxlength="6"
              placeholder="Enter 6 digit" ></td>
            </tr>
			
		
            
            <tr>
            <td>Mobile</td>
            <td><input name="mobile" 
             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
             type = "number" maxlength = "10" placeholder="Enter your shop no" >
            </td></tr>




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
