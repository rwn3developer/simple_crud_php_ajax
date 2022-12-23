<?php

    $con = mysqli_connect("localhost","root","","adminpanel8am");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qu = mysqli_query($con,"INSERT INTO `ajax`(`name`, `email`, `password`) VALUES ('$name','$email','$password')");
    return $qu;
?>