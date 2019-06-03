<?php
 
   echo "<br>".$_GET['name'];
   echo "<br>".$_GET['location'];
   echo "<br>".$_GET['price'];
   echo "<br>".$_GET['time'];
   $imgloc=$_GET['imgloc'];
   


   $files = glob( "$imgloc/*.*");
   
    for ($i=0; $i<count($files); $i++) 
    {     
      $image = $files[$i];
      echo "<br>". '<img src="'.$image .'" height="100px"/>';
          
    }    



?>