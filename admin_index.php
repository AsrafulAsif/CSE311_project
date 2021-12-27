<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Index</title>
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
    }
    </style>
</head>
<body>

<?php
require "admin_navbar.php";

$link=mysqli_connect("localhost","root","","jewellery_network");

if($link===false)
{
	die("ERROR:Could Not connect".mysqli_connect_error());
}

$sql="SELECT jewellery_id,jewellery_name,jewellery_image,jewellery_type,jewellery_info,buy_price,borrow_price FROM jewellery";

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
        echo"<td>"."<h3>Borrow Price:</h3>"."<br>".$row['borrow_price']."</td>";
        echo"<td>"."<a href='edit_jewellery.php?jid=$row[jewellery_id]&jname=$row[jewellery_name]&jpic=$row[jewellery_image]&jtype=$row[jewellery_type]&jinfo=$row[jewellery_info]&buyp=$row[buy_price]&bowp=$row[borrow_price]'><h4>Edit</h4></a>"."</td>";
        echo"<td>"."<a href='delete_jewellery.php'><h4>Delete</h4></a>"."</td>";
        
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