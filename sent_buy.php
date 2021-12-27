<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require "navbar2.php";
    $a=$_GET['jid'];
    $b=$_GET['cusid'];
   # echo $a."<br>";
    #echo $b;

    include("connection.php");
    error_reporting(0);
    $sql="INSERT INTO  buy_jewellery(jewellery_id,customer_id)
    VALUES('$a','$b')";
    $c= mysqli_query($conn,$sql);
    if($c == 1)
{
  
  echo"You successfully bought our jewellery.<br>Please wait ,our confirmation SMS and Email arrive soon.<br>Thanks for shopping.";

}
else{
    
    echo"Plz report us";
    echo"<span><a href='report.php'>go back</a></span>";

}





    ?>
</body>
</html>