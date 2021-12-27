<?php

session_start();
include("connection.php");

$username=$_POST['user'];
$pass=$_POST['password'];
$s="SELECT customer_id,user_name,user_password FROM customer_details WHERE user_name='$username' && user_password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

$row=mysqli_fetch_array($result);




if($num == 1)
{
  $id=$row['customer_id'];
  $_SESSION['user_name']=$username;
  $_SESSION['cusid']=$id;
  header('location:index2.php');
}
else{
    
    //header('location:user_login.php');
   #echo"User name or password incorrect!!";
   #echo"<span><a href='user_logIn.php'>go back</a></span>";
   echo "
            <script type=\"text/javascript\">
           alert('User name or password is incorrect!<br>Please,relog In.');
            </script>
        ";
        require "user_logIn.php";
        
   

}

    
?>
