<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
	jQuery(".wd").datepicker({dateFormat: 'dd-mm-yy'});
	})
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
                  <h3 class="box-title">Event name</h3>
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
                <div class="box-body ">
				 <?php /*?><form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/event_list_show" method="post" enctype="multipart/form-data"><?php */?>
                 
              
                <div class="form-group">
					<label>Event Name<em>*</em></label>
					<select class="form-control" name="eventname" id="eventname">
                    	<option value="">Select....</option>
                        <?php
						foreach($alle as $row)
						{
					?>
                    		<option value="<?php echo $row['eventname'];?>"><?php echo $row['eventname'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>
                
                
                
                
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" id="btn" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 <?php /*?></form><?php */?>
                <!-- /.box-footer -->
                <div id="ajax-content-container">
</div>
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
<script>
    $(document).ready(function(){
        $( "#btn" ).click(function(event)
        {
            event.preventDefault();
            var eventname= $("#eventname").val();

            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/event_list_show',
					dataType:"text",
                    data:{ eventname:eventname},
					      success: function(data) {
       $('#ajax-content-container').html(data);
      },
	  error: function(){
    alert('error!');
  }
                    
                });
        });
    });
</script>


</body>
</html>


