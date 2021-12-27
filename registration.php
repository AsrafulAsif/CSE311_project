<?php
session_start();
include("connection.php");

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$customer_adr=$_POST['adr'];
$phone_number=$_POST['phnnumber'];
$customer_email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['password'];
$s="SELECT *FROM customer_details WHERE user_name='$username'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num == 1)
{
    echo "User name already taken!!";
}
else{
    $reg="INSERT INTO customer_details(first_name,last_name,customer_address,phone_number,customer_email,user_name,user_password) 
    VALUES ('$first_name','$last_name','$customer_adr','$phone_number','$customer_email','$username','$pass')";
    mysqli_query($conn,$reg);
    echo"Registration suss";
    header('location:user_login.php');
}
?>