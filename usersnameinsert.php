<?php

$name= $_POST['name'];

$con=mysqli_connect('localhost','root','','usersname');

$query= "INSERT INTO `username1`(`name`) VALUES ('$name')";

$run=mysqli_query($con,$query);
if($run==TRUE)
    include "display.php";
?>
