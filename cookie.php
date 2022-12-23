<?php 

$a = array("milan","milan@gmail.com","1234");

    setcookie("data", "$a[0] $a[1] $a[2]", time()+1*60*60*24);
?>
