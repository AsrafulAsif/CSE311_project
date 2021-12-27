<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Insertion Page</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
  <?php
  require "admin_navbar.php";
  ?>
<!-----------------------------------------------Creating Form---------------------------------------->
    <form action="" method="post" enctype="multipart/form-data">
    <label for="jname">Jewellery Name:</label>
    <input  style = "text-transform:capitalize;" type="text" name="jname"/><br><br>
    <label for="uploadfile">Jewellery Image:</label>
    <input type="file" name="uploadfile" value=""/><br><br>
    <label for="jtype">Jewellery Type:</label>
    <input style = "text-transform:capitalize;" type="text" name="jtype"/><br><br>
    <label for="jinfo">Jewellery Info:</label>
    <input type="text" name="jinfo"/><br><br>
    <label for="buyprice">Buy Price:</label>
    <input type="text" name="buyprice"/><br><br>
    <label for="borrowprice">Borrow Price:</label>
    <input type="text" name="borrowprice"/><br><br>
    <input type="submit" name="submit" value="upload File"/><br><br>
       
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{

  $j_name=$_POST['jname'];
  //upload file code....
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="image/".$filename;
  move_uploaded_file($tempname,$folder);
  $j_type=$_POST['jtype'];
  $j_info=$_POST['jinfo'];
  $buy_price=$_POST['buyprice'];
  $borrow_price=$_POST['borrowprice'];

  
  $sql="INSERT INTO jewellery(jewellery_name,jewellery_image,jewellery_type,jewellery_info,buy_price,borrow_price)
   VALUES('$j_name','$folder','$j_type','$j_info','$buy_price','$borrow_price')";
  mysqli_query($conn,$sql);
}
//mysqli_close($conn);

?>



