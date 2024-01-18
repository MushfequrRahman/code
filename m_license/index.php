<?php

include('admin/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin/dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>License-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
  <link rel="stylesheet" media="screen" type="text/css" href="styles/styles.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	
tr,th{ text-align:center; font-size:12px;}	
	
	.led-box {
 height: 0px;
width: 25%;
margin: 0 auto;
margin-top: 6px;
}

.led-box p {
  font-size: 12px;
  text-align: center;
  margin: 1em;
}
.led-yellow {
  margin: 0 auto;
  width: 20px;
  height: 20px;
  background-color: #FF0;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 12px;
  -webkit-animation: blinkYellow 1s infinite;
  -moz-animation: blinkYellow 1s infinite;
  -ms-animation: blinkYellow 1s infinite;
  -o-animation: blinkYellow 1s infinite;
  animation: blinkYellow 1s infinite;
}

@-webkit-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@-moz-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@-ms-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@-o-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
.led-red {
  margin: 0 auto;
  width: 20px;
  height: 20px;
  background-color: #F00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 12px;
  -webkit-animation: blinkRed 0.5s infinite;
  -moz-animation: blinkRed 0.5s infinite;
  -ms-animation: blinkRed 0.5s infinite;
  -o-animation: blinkRed 0.5s infinite;
  animation: blinkRed 0.5s infinite;
}

@-webkit-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-moz-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-ms-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-o-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
.led-green {
  margin: 0 auto;
  width: 20px;
  height: 20px;
  background-color: #0F0;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;
}
  
</style>
</head>

<body>
<?php include('nav/nav.php');?>

<div class="container">
	<table class="table table-responsive table-bordered table-hover dataTable">
    	<thead>
      		<tr>
      			<!--<th>SL</th>-->
        		<th>ID</th>
                <th>Unit Name</th>
        		<th>License Name</th>
        		<th>License Number</th>
        		<th>Issue Date</th>
        		<th>Expire Date</th>
                <th>Remaining Day</th>
                <th>Status</th>
        	</tr>
    	</thead>
    	<tbody>
    	<?php
			include('config.php');
			$sql="select DATEDIFF(expire_date,CURDATE()) AS remaining,l_id,l_unit,l_name,l_no,issue_date,expire_date from license";
			$result=mysql_query($sql);
			$i=1;
			while($row=mysql_fetch_array($result))
				{
		?>
        			<tr>
        				<?php /*?><td><?php echo $i;?></td><?php */?>
        				<td style="background-color:#75ade1; vertical-align:middle;"><?php echo $row['l_id'];?></td>
                        <td><?php echo $row['l_unit'];?></td>
         				<td><?php echo $row['l_name'];?></td>
          				<td><?php echo $row['l_no'];?></td>
           				<td style="background-color:#81e1a1;"><?php echo $row['issue_date'];?></td>
           				<td style="background-color:#fcb1b3;"><?php echo $row['expire_date'];?></td>
                        <td style="background-color:#75ade1; vertical-align:middle;"><?php echo $row['remaining'];?></td>
                        <?php
						if($row['remaining'] <61)
						{
						
                        echo '<td><div class="led-red"></div></td>';
                         } 
						else {
                        echo '<td><div class="led-green"></div></td>';
                        
						}
						?>
            		</tr> 
        
	<?php $i++;}
	
	?>
     
    	</tbody>
  </table>
</div> <!--container--> 
<?php include('footer/footer.php');?>
</body>
</html>
