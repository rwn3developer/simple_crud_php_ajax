<?php 
    $con = mysqli_connect("localhost","root","","adminpanel8am");
    $id = $_POST['id'];
    
    $se = mysqli_query($con,"SELECT * FROM `ajax` WHERE `id`='$id'");
    $val = mysqli_fetch_array($se);
    print_r(json_encode($val));




?>