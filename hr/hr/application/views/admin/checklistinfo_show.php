<style>
.error{color:red;}
em{color:red;}
th,td{font-size:12px;}
.chk{width:20px; height:20px; text-align:center;}
/*.content-wrapper{height:5000px;}*/
table{
font-family: Verdana; 
color:black; 
font-size: 12px; 
font-style: normal;
/*font-weight: bold;*/
/*text-align:left; */
text-align: center; 
border-collapse: collapse; 
}
@media print {
    .wrapper {
    width: 100%;
    min-height: 100%;
    height: auto !important;
    position: absolute;
}
.content-wrapper{
    bottom: 50px;
    position: fixed;
    width: 100%;
    top: 50px;
}
.main-footer{
    bottom: 0px;
    position: fixed;
    width: 100%;
}
.top{display:none;}
.close{display:none;}
.modal-title{display:none;}
}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	})
</script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>


<body>
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
<div id="myModal" class="modal fade">
    <div class="modal-dialog" style="width:1350px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Check Status Insert</h5>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <?php /*?><a onclick="location.href='<?php echo base_url();?>Dashboard/cap_insert_form';" data-dismiss="modal">&times;</a><?php */?>
                <button type="button" onClick="location.href='<?php echo base_url();?>Dashboard/checklist_item_form';" class="close" data-dismiss="modal">&times;</button>
                <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */?>
            </div>
            <div class="modal-body">
            <div class="top">
             <?php /*?><?php foreach($ul as $row1)
				{ ?>
                <a href="<?php echo base_url().'assets/uploads/preaudit/'.$row1['preauditpdf'];?>">Pre Audit File</a>
                <?php
				}
				?>
                 <?php foreach($cr2 as $row2)
				{ ?>
                <a href="<?php echo base_url().'assets/uploads/capreport/'.$row2['pdffile'];?>">CAP Report File</a>
                <?php
				}
				?><?php */?>
</div>
                <table id="tableData" class="table table-hover table-bordered table-striped text-center">
              <thead style="background:#91b9e6;">
                <tr>
                <!--<th>Check</th>-->
                  <th>Sl</th>
                  <th>Unit</th>
                  <th>Serial</th>
                  <th>Item</th>
                  <th>Yes</th>
                  <th>No</th>
                  <th>Comments</th>
                </tr>
                </thead>
                
                <?php $i=1;?>
                 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/checklisttinfo_check_insert" method="post" enctype="multipart/form-data">
                 <tr>
                 <td style="vertical-align:middle;">
					<input type="text" class="form-control pd" name="cdate" id="cdate" value="<?php echo date('d-m-Y'); ?>">
                    
				</td>
                </tr>
                  <?php foreach($ul as $row)
				{ ?>
                <tbody id="tbod">
              
                <tr>
                  <input type="hidden" class="form-control" name="ite[]" value="<?php echo $row['checkitem'];?>">
                  
                  <td style="vertical-align:middle;"><?php echo $j=$i++;?></td>
                  <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="factoryname[]" value="<?php echo $row['factoryname']?>"></td>
                  <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="name[]" value="<?php echo $row['name'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="item[]" value="<?php echo $row['checkitem'];?>"></td>
                  
                  <td style="vertical-align:middle;"><input type="checkbox" name="yes_no[]" value="1"></td>
                  <td style="vertical-align:middle;"><input type="checkbox" name="yes_no[]" value="0"></td>
                  <td style="vertical-align:middle;"><textarea name="comments[]"></textarea></td>
                  
                 
                  				
                                
                  
                 
                </tr>
               
                </tbody>
                 <?php } ?>
               
               </table>
               <div class="box-footer text-center">
										<input type="submit" class="btn btn-primary" name="submit" value="SUBMIT" />
									</div>
               
              
                
                
        </div>
    </div>
</div>
</div>
    </div>
</div>
</body>
</html>