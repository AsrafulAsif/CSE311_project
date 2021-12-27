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
    $a1=$_GET['jid1'];
    $b1=$_GET['cusid1'];
    $c1=$_GET['c'];
    $d1=$_GET['t'];
    $f1=$_GET['e'];
   # echo $a."<br>";
    #echo $b;

    include("connection.php");
    error_reporting(0);

    
    


   $sql="INSERT INTO  borrow_jewellery(borrow_day,borrow_total,emi_type,jewellery_id,customer_id)
            VALUES('$c1','$d1','$f1','$a1','$b1')";
    $g= mysqli_query($conn,$sql);
    if($g == 1)
{
  
  echo"You successfully borrowed our jewellery.<br>Please wait ,our confirmation SMS and Email arrive soon.<br>Thanks for borrow.";

}
else{
    
    echo"Plz report us";
    echo"<span><a href='report.php'>go back</a></span>";

}





?>
</body>
</html>