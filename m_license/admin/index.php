<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
  <link rel="stylesheet" media="screen" type="text/css" href="styles/styles.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="header-container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h2 class="header-text">License</h2>
		</div>
	</div><!--row-->
	</div>
	<div class="row">
		
		<div class="col-sm-12 text-center">
			<form class="form-horizontal" role="form" action="login.php" method="post">
  				<div class="form-group">
    				<label class="control-label col-sm-4" for="username">User Name:</label>
    				<div class="col-sm-6 col-md-4">
      					<input type="text" class="form-control" id="username" name="userid" placeholder="Enter username">
    				</div>
  				</div>
  				<div class="form-group">
    				<label class="control-label col-sm-4" for="pwd">Password:</label>
    				<div class="col-sm-6 col-md-4">
      					<input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-4">
      					<button name="submit" type="submit" class="btn btn-default">Submit</button>
    				</div>
					
  				</div>
			 </form>
		</div><!--col-sm-12-->
	</div><!--row-->
</div><!--container-->
</body>
</html>
