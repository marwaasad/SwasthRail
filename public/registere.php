<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo $fname= $_POST['fname'];
    echo $lname =$_POST['lname'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $cpassword = $_POST['cpassword'];
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $gender =$_POST['gender'];
    $hospital =$_POST['hospital'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $mobileno =$_POST['mobileno'];
    $relation = $_POST['relation'];
    $emaill =$_POST['emaill'];
    $alcohol =$_POST['alcohol'];
    $smoke = $_POST['smoke'];
    $need =$_POST['need'];
    $b=implode(" ",$need);


   
    
}

$sql = "INSERT INTO admin (fname,lname,mobile,age,email,password,cpassword,dob,blood_group,gender,hospital,city,state,zip,firstname,lastname,mobileno,relation,emaill,alcohol,smoke,need) VALUES ('$fname','$lname','$mobile','$age','$email','$password','$cpassword','$dob','$blood_group','$gender','$hospital','$city','$state','$zip','$firstname','$lastname','$mobileno','$relation','$emaill','$alcohol','$smoke','$b')";

$query=mysqli_query($con,$sql); 
header('location:log.php');



  
  // if(mysqli_query($con, $sql))
  // {
  //   header("location:home.php");
  // }
  // // else{
  // //   echo "<div class='alert alert-danger'>Query Failed.</div>";
  // // }

?>
