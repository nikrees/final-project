<?php
$name=$_POST['name'];
$password=$_POST['password'];

$con =mysqli_connect("localhost","root","");
 mysqli_select_db($con,"myproject");

if (isset($_POST['name'])) 
 {
 	$sql= "SELECT name,password FROM test WHERE name='$name' AND password='$password'";
$result = mysqli_query($con,$sql);
$a=print_r($result);
} 

mysqli_close($con);
?>