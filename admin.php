<?php
  session_start();
  if(!isset ($_SESSION['admin']))
  {
      header('location:admin_login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
    
    </style>
</head>
<body>
     <h3>Hi <?php echo $_SESSION['admin'] ; ?> boss....</h3>
     <h4>Welcome,Do your job!!</h4>
     <?php
     require "admin_navbar.php"
     ?>
</body>
</html>