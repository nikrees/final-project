<?php

SESSION_START();
$con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"myproject");

if (isset($_POST['name']))
 {
   
  $name=$_POST['name'];
 $password=$_POST['password'];

  
$sql ="SELECT name,password FROM admin WHERE name='$name'AND password='$password' ";
$result= mysqli_query($con , $sql);

//$a=print_r($result);
if ($result->num_rows>=1) {
   
   $_SESSION['name']=$name;
   header('location:admin.php?mes=Welcome Admin'." ".$_SESSION['name']);
}
else
{
   echo "<Script type='text/JavaScript'>alert('check your name or password')</Script>";
   }

 
   }

   include 'alog.php';
   mysqli_close($con);  


?>