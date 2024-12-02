<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $result;

    $hos_name = $_POST['hospital_name'];
    $hos_address = $_POST['details'];
    $hos_contact = $_POST['contact'];
    $hos_link = $_POST['link'];
    $file = $_FILES['photo'];


    if ($file['size'] != 0) {

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if ($fileerror == 0) {
            $destfile = $filename;
            move_uploaded_file($filepath, $destfile);
        }


        $sql = "INSERT INTO `hospital_cards`( `hos_name`, `hos_address`, `hos_contact`, `hos_link`, `hos_img`) VALUES ('$hos_name','$hos_address','$hos_contact','$hos_link','$destfile')";

        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
        echo   "<script>alert('Data has been Added succesfully');</script>";
    } else {
        echo  "<script>alert('this is not working');</script>";
    }
}
