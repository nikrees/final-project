<?php

SESSION_START();
$con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"myproject");

if (isset($_POST['username']))
 {
   
  $username=$_POST['username'];
 $password=$_POST['password'];

  
$sql ="SELECT email,password FROM members WHERE email='$username'AND password='$password' ";
$result= mysqli_query($con , $sql);

//$a=print_r($result);
if ($result->num_rows>=1) {
   
  $_SESSION['name']=$username;
   header('location:home.php?mes='.$username);
}
else
{
   echo "<Script type='text/JavaScript'>alert('check your email or password')</Script>";
   }

 
   }

   include '1st.php';
   mysqli_close($con);  
 

?>