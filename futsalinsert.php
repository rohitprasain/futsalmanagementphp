<?php

$name= $_POST['futsalname'];
$location=$_POST['address'];
$imglocation=$_POST['imglocation'];
$price=$_POST['price'];
$time=$_POST['time'];

$con=mysqli_connect('localhost','root','','insertdb');


$query="INSERT INTO `userdata`( `name`, `location`, `imagelocation`, `price`, `time`) VALUES ('$name','$location','$imglocation','$price','$time')";

$run=mysqli_query($con,$query);

if($run==true)
 echo "successful";

?>

