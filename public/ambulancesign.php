<?php
include('db.php');

if (isset($_POST['login']))
{
   $no = $_POST['mobile']; 
   $pwd =  $_POST['password'];

  $query = "SELECT * FROM  admin WHERE mobile='$no' && password='$pwd'";
  $data=mysqli_query($con, $query);
  $total=mysqli_num_rows($data);
  $total;
  if($total==1)
  {
      header('location:ambulance.php');
  }
     
  else{
   echo "<h1>login failed</h1>";
  }

}

?>


