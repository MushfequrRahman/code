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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
				$("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' });

            });
        </script>
  <!--<script src="js/jquery.min.js"></script>-->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("config.php");
?>
<?php include('nav/nav.php');?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<form class="form-horizontal" role="form" action="add_license_action.php" method="post">
            	<div class="form-group">
    				<label class="control-label col-sm-4" for="add_unit_name">Add Unit Name:</label>
    				<div class="col-sm-6">
      					<select class="form-control" name="unit_name">
                        	<option value="Masco Cottons Ltd">Masco Cottons Ltd</option>
                            <option value="MascoTex Ltd">MascoTex Ltd</option>
                        </select>
					</div>
                </div>
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
      					<input type="text" class="form-control" name="issue_date" id="datepicker1" placeholder="Enter Issue Date">
					</div>
                 </div>
                 <div class="form-group">
                 	<label class="control-label col-sm-4" for="expire_date">Expire Date:</label>
                    <div class="col-sm-6">
      					<input type="text" class="form-control" name="expire_date" id="datepicker2" placeholder="Enter Expire Date">
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
<?php include('footer/footer.php');?>
</body>
</html>
