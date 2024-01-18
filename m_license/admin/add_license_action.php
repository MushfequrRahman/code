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
$l_unit=$_POST['unit_name'];
$l_name=$_POST['license_name'];
$l_number=$_POST['license_number'];
$issue_date=$_POST['issue_date'];
$expire_date=$_POST['expire_date'];
$sql="INSERT INTO license(l_id,l_unit,l_name,l_no,issue_date,expire_date) VALUES ('','$l_unit','$l_name','$l_number','$issue_date','$expire_date')";
mysql_query($sql);
header('location:add_license.php');
?>
</body>
</html>
