<?php 

    $con = mysqli_connect("localhost","root","","adminpanel8am");

    $id = $_POST['id'];
    $del = mysqli_query($con,"DELETE FROM `ajax` WHERE `id`='$id'");
    echo $del;


?>