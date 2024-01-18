<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
	})
</script> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
   <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
         
         
          
          <!-- /.box -->

          <!-- About Me Box -->
        
          <!-- /.box -->
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Employee Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($elup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/elup" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="userid" value="<?php echo $row['userid']; ?>">
              <div class="form-group">
					<label>Unit</label>
					<select class="form-control" name="unit" id="unit">
                    	<option value="">Select....</option>
                        <?php
						foreach($fl as $row3)
						{
					?>
                    		<option value="<?php echo $row3['factoryid'];?>"><?php echo $row3['factoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo $row['unit']; ?>
                    <?php echo form_error('designation', '<div class="error">', '</div>');  ?>
				</div>
              <?php /*?><div class="form-group">
                  <label>Unit</label>
                  <input type="text" class="form-control" name="unit" value="<?php echo $row['unit']; ?>">
                  <?php echo form_error('unit', '<div class="error">', '</div>');  ?>
              </div><?php */?>
              <?php /*?><div class="form-group">
                  <label>Department</label>
                  <input type="text" class="form-control" name="department" value="<?php echo $row['department']; ?>">
                  <?php echo form_error('department', '<div class="error">', '</div>');  ?>
              </div>
              <div class="form-group">
                  <label>Section</label>
                  <input type="text" class="form-control" name="section" value="<?php echo $row['section']; ?>">
                  <?php echo form_error('section', '<div class="error">', '</div>');  ?>
              </div><?php */?>
              <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" readonly name="useridd" value="<?php echo $row['userid']; ?>">
                  <?php echo form_error('userid', '<div class="error">', '</div>');  ?>
              </div>
			  <div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="empname" value="<?php echo $row['name']; ?>">
                    <?php echo form_error('empname', '<div class="error">', '</div>');  ?>
			  </div>
			  <div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
                    <?php echo form_error('password', '<div class="error">', '</div>');  ?>
			  </div>
			  <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                  <?php echo form_error('email', '<div class="error">', '</div>');  ?>
              </div>
              <div class="form-group">
                  <label>Cell</label>
                  <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>">
                  <?php echo form_error('mobile', '<div class="error">', '</div>');  ?>
              </div>
              <?php /*?><div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control" name="designation" value="<?php echo $row['designation']; ?>">
                  <?php echo form_error('designation', '<div class="error">', '</div>');  ?>
              </div><?php */?>
              <div class="form-group">
                  <label>User Type</label>
                  <input type="text" class="form-control" readonly name="user_type" value="<?php echo $row['user_type']; ?>">
                  <?php echo form_error('user_type', '<div class="error">', '</div>');  ?>
              </div>
			  <div class="form-group">
					<label>Department<em>*</em></label>
					<select class="form-control" name="department" id="department">
                    	<option value="">Select....</option>
                        <?php
						foreach($alld as $row1)
						{
					?>
                    		<option value="<?php echo $row1['department'];?>"><?php echo $row1['department'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo $row['department']; ?>
                    <?php echo form_error('department', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Section<em>*</em></label>
					<select class="form-control" name="section" id="section">
                    	<option value="">Select....</option>
                        
                    </select>
                    <?php echo $row['section']; ?>
                    <?php echo form_error('section', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Designation<em>*</em></label>
					<select class="form-control" name="designation" id="designation">
                    	<option value="">Select....</option>
                        <?php
						foreach($allde as $row2)
						{
					?>
                    		<option value="<?php echo $row2['designation'];?>"><?php echo $row2['designation'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo $row['designation']; ?>
                    <?php echo form_error('designation', '<div class="error">', '</div>');  ?>
				</div>
                
                
                
                 
				
                
				
				
				
				
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
					
				<?php } ?>	
              </div>
             

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->

<script type="text/javascript">
$(document).ready(function(){

    $('#department').change(function(event){
        event.preventDefault();
		var department = $('#department').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_sectionname",
			dataType:"json",
                    data:{ department:department},
            success:function(res)
            	{
         		 	$('#section').find('option');
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#section').append('<option value="'+data['section']+'">'+data['section']+'</option>');
          			});
				}
        	});
    	});
	});
</script>
