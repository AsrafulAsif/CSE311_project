<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jewellery_network";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   // echo "ok";

}
else{
    echo "connection failed";
}

?>