<?php 

$con = mysqli_connect("localhost","root","","adminpanel8am");
    $sname = $_POST['sname'];
    $qu = mysqli_query($con,"SELECT * FROM `ajax` WHERE `name` LIKE '%$sname%'");
    
    $data = array();
    while($row = mysqli_fetch_array($qu))
    {
        $data[] = $row;
    }

    echo json_encode($data)

?>