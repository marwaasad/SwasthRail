<?php
include('dbcon.php');

if (isset($_POST['login']))
{
   $email = $_POST['email']; 
   $pwd =  $_POST['password'];

  $query = "SELECT * FROM  admin WHERE email='$email' && password='$pwd'";
  $data=mysqli_query($con, $query);
  $total=mysqli_num_rows($data);
  $total;
  if($total==1)
  {
    
    header('location:index.php');
  }
     
  else{
   echo "<h1>login failed</h1>";
  }

}

?>