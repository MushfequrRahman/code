<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	})
</script>
<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;
		
    $("#addau").click(function () {
				
	if(counter>100){
            alert("Only 100 rollboxes allow");
            return false;
	}   
		
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'AuDiv' + counter);

	newTextBoxDiv.after().html(
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="text" class="form-control" name="checklistname[]' + counter + 
	      '" id="checklistname' + counter + '" placeholder="' + 'check List' +'" ></td>'+
		  '</tr></table></div>');
            
	newTextBoxDiv.appendTo("#AuGroup");

				
	counter++;
	//console.log("#pd"+counter--);
	//jQuery("#pd"+counter--).datepicker({dateFormat: 'yy-mm-dd'});	
     });

     $("#removeau").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
	counter--;
			
        $("#AuDiv" + counter).remove();
			
     });
		
     
  });
</script>	 
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
		<!-- Info boxes -->
		<!-- Main row -->
			<div class="row">
        <!-- Left col -->
				<div class="col-md-12">
					<div class="row">
					<!-- /.col -->
						<div class="col-md-12">
						<!-- USERS LIST -->
							<div class="box box-danger">
								<div class="box-header with-border">
									<h3 class="box-title">Check list Info Insert</h3>
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<?php if($responce = $this->session->flashdata('Successfully')): ?>
												<div class="text-center">
													<div class="alert alert-success text-center"><?php echo $responce;?></div>
												</div>
												<?php endif;?>
											</div>
										</div>
									</div>
								<!-- /.box-header -->
								
									<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/checklisttinfo_insert" method="post" enctype="multipart/form-data">
										<div class="box-body ">
										<!--<div class="form-group">
										<label for="exampleInputFile">Student Photo</label>
										<input type="file" name="pic_file">
										</div>-->
										<!-- text input -->
										<div class="col-md-12">
										<div class="form-group">
											<label>Unit<em>*</em></label>
											<select class="form-control" name="factoryname" id="factoryname">
												<option value="">Select....</option>
													<?php
														foreach($allf as $row)
														{
													?>
															<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
													<?php
														}
													?>
											</select>
											<?php echo form_error('factoryname', '<div class="error">', '</div>');  ?>
										</div>
										<div class="form-group">
											<label>Check List Serial<em>*</em></label>
											<select class="form-control" name="checklistserial" id="checklistserial">
												<option value="">Select....</option>
													<?php
														foreach($allcs as $row)
														{
													?>
															<option value="<?php echo $row['csid'];?>"><?php echo $row['name'];?></option>
													<?php
														}
													?>
											</select>
											
										</div>
										
										
										
										
										<!--</div>-->
										<!--<div class="col-md-8">-->
										<div id="AuGroup">
											<div class="row">
												<table class="table table-bordered table-striped text-center">
													<tr>
														<th><input type='button' value='Add Button' id='addau' class='btn btn-success'></th>
														<th>&nbsp;</th>
														<th><input type='button' value='Remove Button' id='removeau' class='btn btn-danger'></th>
													</tr>
													<tr>
														<td colspan="3"><input class="form-control" type="text" name="checklistname[]" placeholder="Check List">
															<?php echo form_error('checklistname[]', '<div class="error">', '</div>');  ?>
														</td>
														
													</tr>
												</table>
											</div>
											
										</div>
										<div class="box-footer text-center">
										<input type="submit" class="btn btn-primary" name="submit" value="SUBMIT" />
									</div>
										<!--</div>-->
										<!-- /.users-list -->
									</div>
									<!-- /.box-body -->	
									
								</form>
								<!-- /.box-footer -->
							</div>
							<!--/.box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	</div>
<!-- ./wrapper -->

</body>
</html>


