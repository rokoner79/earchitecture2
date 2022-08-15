<!DOCTYPE html>
<html>
   <head>
      <title>Types of land</title>
   </head>

   <body>
      <form action="" method="POST">
      Types of land: <br>
<select name='type'>
      <option>
         square
      </option>
       <option>
         rectangle
      </option>
</select><br>
Quantity:<br>
<select name="quantity">
      <option>
         3 stok
      </option>
       <option>
         4 stok
      </option>
      <option>
         5 stok
      </option>
</select><br>
<input type='submit' name="sub">
</form>
   </body>
</html>
<?php
include'connection.php';
session_start();    
if(isset($_POST['sub'])
)
{
$type=$_POST['type'];
$quantity=$_POST['quantity'];
$select="SELECT * from home where type='$type' and quantity='$quantity'";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_array($query);
if($row['type'] == $type && $row['quantity'] == $quantity)
{
   $id = $row['id'];
   if($id==1)
   { 
   echo'option:1<br>';  
   echo'<img src="image/square3.jpg" border="1"><br>';

      echo"option:2<br> ";  
   echo'<img src="image/square3.jpg" border="1">';

   }     
   elseif($id==2)
   {   
      echo"Rectangle";
   }
   else{
      echo"rong";
   }
}
}
?>
