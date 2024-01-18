<?php
include('admin_session.php');
?>
<?php $login_session; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update License</title>
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
                $(".datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
				$(".datepicker2").datepicker({ dateFormat: 'yy-mm-dd' });

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
			<form class="form-horizontal" role="form" action="update_license_action.php" method="get">
            <?php
            $sql="select * from license";
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
				{
					?>
  				<table class="table table-responsive table-bordered table-hover">
    	<thead>
      		<tr>
      			
        		<th>ID</th>
                <th>Unit Name</th>
        		<th>License Name</th>
        		<th>License Number</th>
        		<th>Issue Date</th>
        		<th>Expire date</th>
                <th>Submit</th>
        	</tr>
    	</thead>
    	<tbody>
    	<?php
			include('config.php');
			$sql="select * from license";
			$result=mysql_query($sql);?>
            
            <?php
			
			while($row=mysql_fetch_array($result))
				{
		?><form class="form-horizontal" role="form" action="update_license_action.php" method="post">
        			<tr>
        				
        				<td><input type="text" readonly class="form-control" id="l_id" name="l_id" value="<?php echo $row['l_id'];?>"></td>
                        <td><input type="text" readonly class="form-control" id="l_unit" name="l_unit" value="<?php echo $row['l_unit'];?>"></td>
         				<td><input type="text" readonly class="form-control" name="l_name" value="<?php echo $row['l_name'];?>"></td>
          				<td><input type="text" readonly class="form-control" name="l_no" value="<?php echo $row['l_no'];?>"></td>
           				<td><input type="text" class="form-control datepicker1" name="issue_date" value="<?php echo $row['issue_date'];?>"></td>
           				<td><input type="text" class="form-control datepicker2" name="expire_date" value="<?php echo $row['expire_date'];?>"></td>
                        <td><input type="submit" class="form-control" value="Submit"></td>
                        <?php /*?><td><a href="update_license_action.php?l_id=<?php echo $row['l_id'];?> ">Submit</a></td><?php */?>
            		</tr> </form>
        
	<?php }
	
	?>
     
    	</tbody>
  </table>
                <?php
                }
                ?>
			 
		</div><!--col-sm-12-->
	</div><!--row-->
</div><!--container-->
<?php include('footer/footer.php');?>
</body>
</html>
