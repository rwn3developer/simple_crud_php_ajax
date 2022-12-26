<?php 


    $con = mysqli_connect("localhost","root","","adminpanel8am");
    $id = @$_POST['id'];
    
    $se = mysqli_query($con,"SELECT * FROM `ajax` WHERE `id`='$id'");
    $val = mysqli_fetch_array($se);
    print_r(json_encode($val));


    if(isset($_POST['editid']))
    {
       $id = $_POST['editid'];
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       $qu = mysqli_query($con,"UPDATE `ajax` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'");   
    }




?>