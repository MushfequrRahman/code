<?php
include('admin_session.php');
?>
<?php $login_session; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add License</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
  <link rel="stylesheet" media="screen" type="text/css" href="styles/styles.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("config.php");
?>
<?php

//if(@$_REQUEST['submit'])
//	{
//		@$add_subject=$_REQUEST['add_subject'];
//		@$sqluser="SELECT subject FROM subject_name WHERE subject='$add_subject'";
//			$queryuser=mysql_query($sqluser);
//			$resultuser=mysql_num_rows($queryuser);
//					if (empty($add_subject))
//						{
//							$inssubject= "Subject is required";
//							$errors = 1;
//						}
//					
//						
//			if($resultuser==0 && @$errors == 0)
//				{
//					@$sql="INSERT INTO subject_name(subject) VALUES ('$add_subject')";
//					@$query = mysql_query($sql);
//				}
//			else if($resultuser==1)
//				{
//					$exist="Subject Already Exist";
//				}
//	}
?>
<a class="pull-right" href="logout.php">Log Out</a>
<a href="dashboard.php">Dashboard</a>
<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<form class="form-horizontal" role="form" action="add_license_action.php" method="post">
  				<div class="form-group">
    				<label class="control-label col-sm-4" for="add_license_name">Add License Name:</label>
    				<div class="col-sm-6">
      					<input type="text" class="form-control" id="license_name" name="license_name" placeholder="Enter License Name">
					</div>
                </div>
                <div class="form-group">
                	<label class="control-label col-sm-4" for="add_license_number">Add License Number:</label>
                    <div class="col-sm-6">
      					<input type="text" class="form-control" id="license_no" name="license_number" placeholder="Enter License Number">
					</div>
                 </div>
                 <div class="form-group">
                 	<label class="control-label col-sm-4" for="issue_date">Issue Date:</label>
                    <div class="col-sm-6">
      					<input type="text" class="form-control" id="issue_date" name="issue_date" placeholder="Enter Issue Date">
					</div>
                 </div>
                 <div class="form-group">
                 	<label class="control-label col-sm-4" for="expire_date">Expire Date:</label>
                    <div class="col-sm-6">
      					<input type="text" class="form-control" id="expire_date" name="expire_date" placeholder="Enter Expire Date">
					</div>
  				</div>
  				<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-4">
							<input type="submit" name="submit" class="btn btn-default" value="Submit" />
    					</div>
				</div>
			 </form>
		</div><!--col-sm-12-->
	</div><!--row-->
</div><!--container-->
</body>
</html>
