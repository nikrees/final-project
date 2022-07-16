<?php
session_start();
$npassword=$_POST['new'];

$con= mysqli_connect("localhost","root","");
if (!$con) {
    die('not connected: '.mysqli_error());
 }
 mysqli_select_db($con,"myproject");
 
 mysqli_query($con ,"UPDATE admin SET password='$npassword' ");
 
  if (!$con)
   {
    echo "<script>alert('check your password')</script>";
  }

 echo "<script>alert('admin password changed successfully')</script>";

 mysqli_close($con);
 include 'admin.php';
?>