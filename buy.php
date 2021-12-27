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
  $id= $_GET['jid'];
  $cmid=$_GET['cid'];
 $link=mysqli_connect("localhost","root","","jewellery_network");

 if($link===false)
 {
     die("ERROR:Could Not connect".mysqli_connect_error());
 }
 
 $sql="SELECT jewellery_id,jewellery_name,jewellery_image,jewellery_type,jewellery_info,buy_price,borrow_price FROM jewellery WHERE jewellery_id=$id";
 
 if($result=mysqli_query($link,$sql))
 {
     if(mysqli_num_rows($result)>0)
     {
         echo"<table>";
         
     while($row=mysqli_fetch_array($result))
     {
         
         echo"<tr>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Jewellery Name:</h3>"."<br>".$row['jewellery_name']."</td>";
         echo"<td>"."<img src='".$row['jewellery_image']."'height='400' width='400'/>"."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Jewellery Type:</h3>"."<br>".$row['jewellery_type']."</td>";
         echo"<td>"."<h3>Jewellery Info:</h3>"."<br>".$row['jewellery_info']."</td>";
         echo"<td>"."<h3>Buy Price:</h3>"."<br>".$row['buy_price']."</td>";
         echo"<td>"."<a href='sent_buy.php?jid=$id&cusid=$cmid'><h4>Click to Buy</h4></a>"."</td>";
         
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

  #customer details display

  
 $sql1="SELECT customer_id,first_name,last_name,customer_address,phone_number,customer_email FROM customer_details WHERE customer_id=$cmid";
 
 if($result1=mysqli_query($link,$sql1))
 {
     if(mysqli_num_rows($result1)>0)
     {
         echo"<table>";
         
     while($row1=mysqli_fetch_array($result1))
     {
         
         echo"<tr>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>First Name:</h3>"."<br>".$row1['first_name']."</td>";
         #echo"<td>"."<img src='".$row['jewellery_image']."'height='400' width='400'/>"."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Last Name:</h3>"."<br>".$row1['last_name']."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Address:</h3>"."<br>".$row1['customer_address']."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Phone Number:</h3>"."<br>".$row1['phone_number']."</td>";
         echo"<td style = 'text-transform:capitalize;'>"."<h3>Email:</h3>"."<br>".$row1['customer_email']."</td>";
         
         
         echo"</tr>";
     
 }
 echo"</table>";
 mysqli_free_result($result1);
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