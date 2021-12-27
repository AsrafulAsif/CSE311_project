<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php  require "navbar.php";  ?>
<div class="container">
<div class="row">
 <!-------registration form----->
<div class="col-md-6">
<h2>Registration Form</h2>
<form action="registration.php" method="post">
<!---User first name---->
<div class="form-group">
<label>First name</label>
<input type="text" name="fname" class="form-control" required>
</div>
<!---user last name---->
<div class="form-group">
<label>Last name</label>
<input type="text" name="lname" class="form-control" required>
</div>
<!---- customer address--->
<div class="form-group">
<label>Address</label>
<input type="text" name="adr" class="form-control" required>
</div>
<!---Phn number---->
<div class="form-group">
<label>Phone number</label>
<input type="text" name="phnnumber" class="form-control" required>
</div>
<!----email---->
<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" required>
</div>
<!----user name--->
<div class="form-group">
<label>User name</label>
<input type="text" name="username" class="form-control" required>
</div>
<!----password--->
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Registration</button>
</form>
</div>
</div>
</div>
</body>
</html>