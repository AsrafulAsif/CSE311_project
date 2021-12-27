<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Network</title>
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
 require "navbar.php";
#include("connection.php");
#$query="SELECT jewellery_id,jewellery_name,jewellery_image,jewellery_type,jewellery_info,buy_price,borrow_price FROM jewellery";
#$data=mysqli_query($conn,$query);
#$total=mysqli_num_rows($data);


#if($total !=0)
#{
 #   while($result=mysqli_fetch_assoc($data))
  #  {
   #     echo /*$result['jewellery_id']."<br>".*/$result['jewellery_name']." <br> "."<img src='".$result['jewellery_image']."'height='400' width='400'/>"."<br>Jewellery type: ".$result['jewellery_type']."<br>Jewellery Info: ".$result['jewellery_info']."<br>Buy price:".$result['buy_price']."taka"."<br>Borrow price:".$result['borrow_price']."taka per day"."<br>";
    #    echo " <span><a href='index.php'>Buy</a></span>";
     #   echo " <span><a href='index.php'>Borrow</a></span><br><br>";
    #}
#}
#else{
 #   echo "There is no record";
#}
?>



<?php

$link=mysqli_connect("localhost","root","","jewellery_network");

if($link===false)
{
	die("ERROR:Could Not connect".mysqli_connect_error());
}

$sql="SELECT jewellery_id,jewellery_name,jewellery_image,jewellery_type,jewellery_info,buy_price,borrow_price FROM jewellery where division name ='$string'";

if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo"<table>";
		#echo"<tr>";
		#echo"<th>Jewellery Name</th>";
		#echo"<th>Jewellery Image</th>";
		#echo"<th>Jewellery Type</th>";
       # echo"<th>Jewellery Info</th>";
       # echo"<th>Buy price</th>";
       # echo"<th>Borrow price</th>";
		#echo"</tr>";
		
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
        echo"<td style = 'text-transform:capitalize;'>"."<h3>Jewellery Name:</h3>"."<br>".$row['jewellery_name']."</td>";
        echo"<td>"."<img src='".$row['jewellery_image']."'height='400' width='400'/>"."</td>";
		#echo"<td>".$row['jewellery_image']."</td>";
		echo"<td style = 'text-transform:capitalize;'>"."<h3>Jewellery Type:</h3>"."<br>".$row['jewellery_type']."</td>";
        echo"<td>"."<h3>Jewellery Info:</h3>"."<br>".$row['jewellery_info']."</td>";
        echo"<td>"."<h3>Buy Price:</h3>"."<br>".$row['buy_price']."</td>";
        echo"<td>"."<h3>Borrow Price:</h3>"."<br>".$row['borrow_price']."</td>";
        
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