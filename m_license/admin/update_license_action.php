<?php /*?><?php
include('admin_session.php');
?>
<?php $login_session; ?><?php */?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update License Action</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
  <link rel="stylesheet" media="screen" type="text/css" href="styles/styles.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>-->
</head>
<body>
<?php
//error_reporting(0);
include("config.php");
$l_id=$_REQUEST['l_id'];
$l_unit= $_REQUEST['l_unit'];
$l_name= $_REQUEST['l_name'];
$l_no=$_REQUEST['l_no'];
$issue_date=$_REQUEST['issue_date'];
$expire_date=$_REQUEST['expire_date'];
echo $sql="UPDATE license SET l_id='$l_id',l_unit='$l_unit',l_name='$l_name',l_no='$l_no',issue_date='$issue_date',expire_date='$expire_date' WHERE l_id='$l_id' ";
mysql_query($sql);
header('location:update_license.php');
?>
</body>
</html>
