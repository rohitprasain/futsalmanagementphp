<html>
<head>
	  <title>entryform</title>
</head>
<body background="display.jpg" style="background-size: 1360px,200px ;">
	<form action="futsalinsert.php" method="post" enctype="multipart/form-data">
		<table align="center" style="margin-top: 100px;">
			 <tr>
			 	<td>Futsal name:</td><td><input type="text" name="futsalname" required="required"></td>
			 </tr>
			 <tr>
			 	<td>Location:</td><td><input type="text" name="address" required="required"></td>
			 </tr>	
			 <tr>
			    <td>Image location:</td><td> <input type="text" name="imglocation"  required="required"></td> 
			 </tr>
			 <tr>
			    <td>Price:</td><td> <input type="number" name="price"  required="required"></td> 
			 </tr>
			  <tr>
			    <td>Time:</td><td> <input type="text" name="time"  required="required"></td> 
			 </tr>
			 <tr>
			 	<td align="center"><td><input type="submit" name="submit"  ></td>
			 </tr>
		</table>
	</form>
</body>
</html>