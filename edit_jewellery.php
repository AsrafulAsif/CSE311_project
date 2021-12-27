<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
  <?php
  require "admin_navbar.php";
  ?>
<!-----------------------------------------------Creating Form---------------------------------------->
    <form action="" method="GET" >
    <label for="jname">Jewellery Name:</label>
    <input  style = "text-transform:capitalize;" type="text" name="jname" value="<?php echo $_GET['jname'];?>"/><br><br>
    <label for="uploadfile">Jewellery Image:</label>
    <input type="file" name="uploadfile" value="<?php echo $_GET['jpic']; ?>"/><br><br>
    <label for="jtype">Jewellery Type:</label>
    <input style = "text-transform:capitalize;" type="text" name="jtype" value="<?php echo $_GET['jtype'];?>"/><br><br>
    <label for="jinfo">Jewellery Info:</label>
    <input type="text" name="jinfo" value="<?php echo $_GET['jinfo'];?>"/><br><br>
    <label for="buyprice">Buy Price:</label>
    <input type="text" name="buyprice" value="<?php echo $_GET['buyp'];?>"/><br><br>
    <label for="borrowprice">Borrow Price:</label>
    <input type="text" name="borrowprice" value="<?php echo $_GET['bowp'];?>"/><br><br>
    <input type="submit" name="submit" value="update"/><br><br>
       
    </form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{   
    $jid=$_GET[jid];
    $j_name=$_GET['jname'];
    //upload file code....
    $filename=$_FILES["uploadfile"]["name"];
    $tempname=$_FILES["uploadfile"]["tmp_name"];
    $folder="image/".$filename;
    move_uploaded_file($tempname,$folder);
    $j_type=$_GET['jtype'];
    $j_info=$_GET['jinfo'];
    $buyprice=$_GET['buyprice'];
    $borrowprice=$_GET['borrowprice'];
    $query="UPDATE jewellery SET jewellery_name='$j_name',jewellery_image='$folder',jewellery_type='$j_type',jewellery_info='$j_info',buy_price='$buyprice',borrow_price='$borrowprice' WHERE jewellery_id='$jid'";
   mysqli_query($conn,$query);
}
else{
    echo "Use update button to save the changes!!";
}
//mysqli_close($conn);








?>