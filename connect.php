
<?php

$name= $_REQUEST['name'];
$address= $_REQUEST['address'];
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];
$mobile= $_REQUEST['mobile'];


$con= mysqli_connect("localhost","root","");
if (!$con) {
    die('not connected: '.mysqli_error());
 }
 mysqli_select_db($con,"myproject");

 mysqli_query($con,"INSERT INTO repairs(name,address,email,password,mobile) VALUES('$name','$address','$email','$password','$mobile')");
 
 mysqli_close($con);
?>

<html>
<head>
    <style type="text/css">
    body{
        background-color: lightgrey;}
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
}
</style>
</head>
<body>
<p class="p1">Your Registration is Successfully..</p>

</body>
</html>