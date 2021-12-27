<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Orders</title>
</head>
<body>
<?php
 require "admin_navbar.php";

include("connection.php");
$query="SELECT jewellery_name,jewellery_image,jewellery_type,jewellery_info,borrow_price,borrow_day,borrow_total,emi_type,first_name,last_name,customer_address,phone_number,customer_email FROM borrow_jewellery INNER JOIN jewellery ON borrow_jewellery.jewellery_id=jewellery.jewellery_id INNER JOIN customer_details ON borrow_jewellery.customer_id=customer_details.customer_id ORDER BY borrow_jewellery.borrow_id DESC";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
   while($result=mysqli_fetch_assoc($data))
    {
        echo /*$result['jewellery_id']."<br>".*/"Jewellery Name:"."<br>".$result['jewellery_name']." <br> "."<img src='".$result['jewellery_image']."'height='400' width='400'/>"."<br>Jewellery type: ".$result['jewellery_type']."<br>Jewellery Info: ".$result['jewellery_info']."<br>"."Borrow price:".$result['borrow_price']."taka per day"."<br>"."Total day for borrowing:".$result['borrow_day']."<br>"."Total price:".$result['borrow_total']."<br>"."Need EMI:".$result['emi_type']."<br>"."Customer Name:</h3>"."<br>".$result['first_name']."  ".$result['last_name']."<br>"."Customer Address:"."<br>".$result['customer_address']."<br>"."Customer Phone Number:"."<br>".$result['phone_number']."<br>"."Email:"."<br>".$result['customer_email']."<br>";
        echo " <span><a href='https://mail.google.com'>Sent mail</a></span><br>";

    }
}
else{
    echo "There is no record";
}
?>
</body>
</html>