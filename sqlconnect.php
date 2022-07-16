
<?php

$name= $_POST['name'];
$address= $_POST['address'];
$email= $_POST['email'];
$password= $_POST['password'];
$nic= $_POST['nic'];
$gender= $_POST['gender'];
$mobile= $_POST['mobile'];
$education= $_POST['education'];

$con= mysqli_connect("localhost","root","");
if (!$con) {
 	die('not connected: '.mysqli_error());
 }
 mysqli_select_db($con,"myproject");

 mysqli_query($con,"INSERT INTO members(name,address,email,password,nic,gender,mobile,education)VALUES('$name','$address','$email','$password','$nic','$gender',$mobile,'$education')");
 mysqli_close($con);

?>
<html>
<head>
    <style type="text/css">
    body{
        background-color: lightgray;}
.p1{
    font-size: 100px;
    text-align: center;
    color: blue;
    padding: 50px;
    font-style: italic;
}
.p2{
    text-align: center;
}
button{
    background-color: gray;
    font-size: 20px;
}
</style>
</head>
<body>
<p class="p1">Your Registration is Successfully..</p>

<p class="p2"><button><a href="1st.php">next</a></button></p>

</body>
</html>