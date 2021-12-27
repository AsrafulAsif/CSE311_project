<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
 <?php  require "navbar.php";  ?>
<div class="container">
<div class="row">
<!--log in form--->
<div class="col-md-6">
<h2>Log In</h2>
<form action="validation.php" method="post">
<!---user name---->
<div class="form-group">
<label>User Name</label>
<input type="text" name="user" class="form-control" required>
</div>
<!----password---->
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Log In</button>
</form>
</div>
</div>
</div>   
</body>
</html>