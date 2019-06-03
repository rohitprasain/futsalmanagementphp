
<!DOCTYPE html>
<html>
<head>
   <title>display</title>
</head>
<body background="dark.jpeg" style="background-size: 1366px,680px ;">
    
   <h1> <p align="center">WELCOME TO FUTSAL NEPAL<br></p></h1>
<h3><p align="center">AVAILABLE FUTSAL</p></h3>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','insertdb');

   function showdata()
   {

       global $con;

       $query= "SELECT * FROM `userdata`"; 

       $run= mysqli_query($con,$query);

   	 if($run==TRUE)
   	 {
   	 	?>
   	 	<table border="1" width="30%" align="center">
   	 		<tr>
   	 			<div><td><b>S.N </b></td><td><b>FUTSAL NAME </b></td><td><b>ADDRESS</b></td></div>
   	 		</tr>
   	 		<?php

   	 		  while ($data=mysqli_fetch_assoc($run)) 
   	 		  {
   	 		      ?>
                 
   	 		      <tr>
   	 		      	     <td> <?php echo $data ['id']; ?></td>                     
                    
                     <td><a href="view.php?id=<?php echo $data['id']; ?>& name=<?php echo $data['name']; ?>&location=<?php echo $data['location']; ?>&imgloc=<?php echo $data['imagelocation']; ?>&price=<?php echo $data['price']; ?> &time=<?php echo $data['time'];?>"><?php echo $data['name']?></a>
                      
                      <td><?php echo $data ['location'];?>
   	 		      </tr>
   	 		      <?php 
   	 		  }
   	 	?>       
         </table>
          <?php
   	 }	
   	else 
   	 {
   	    echo "error!!";	
   	 } 	 
   }
?>


<?php showdata()?>