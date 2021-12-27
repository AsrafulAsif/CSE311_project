<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
    td{
        padding:23px;
    }
    h3{
        
        display: block;
        color: white;
        text-align: center;      
        text-decoration: none;
        overflow: hidden;
        background-color: #333;
        border: 1px solid #222;
    }
    </style>
</head>
<body>
    



<?php
  require "navbar2.php";
 $link=mysqli_connect("localhost","root","","jewellery_network");

 if($link===false)
 {
     die("ERROR:Could Not connect".mysqli_connect_error());
 }
 
 $sql="SELECT phone_number,email,address FROM contact";
 
 if($result=mysqli_query($link,$sql))
 {
     if(mysqli_num_rows($result)>0)
     {
         echo"<table>";
         
     while($row=mysqli_fetch_array($result))
     {
         
         echo"<tr>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Office Phone Number:</h3>"."<br>".$row['phone_number']."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Email:</h3>"."<br>".$row['email']."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Office Address:</h3>"."<br>".$row['address']."</td>";
         echo"</tr>";
     
 }
 echo"</table>";
 mysqli_free_result($result);
 }
     else
     {
         echo"No records matching your query were found.";
     }
 }
 
     else{
         echo"ERROR:Could not able to excute $sql.".mysqli_error($link);
     }



  
 
 
    
     
     
     mysqli_close($link);

 
?>
</body>
</html>