<style>
.error{color:red;}
em{color:red;}
.heading{display:none;}
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
.box-footer{display:none;}
.heading{display:block; text-align:center;}
#tableData tr td{ border:2px solid #000;}

}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
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
      <div class="heading">
            	<h4>Masco Group</h4>
                <h5>Composite knit Garments</h5>
            </div>
        <!-- Left col -->
        <div class="col-md-12">
      
          <div class="row">
           
            <!-- /.col -->

            <div class="col-md-12">
            
              <!-- USERS LIST -->
              <div class="box box-danger top">
                <div class="box-header with-border top">
                  <h3 class="box-title">Check List Report</h3>
					
              
                </div>
                <!-- /.box-header -->
                
				<?php /*?> <form role="form" id="comment" autocomplete="off" action="<?php echo base_url();?>Dashboard/bar_chart" method="post" enctype="multipart/form-data"><?php */?>
                <div class="box-body ">
                       
						
						
                <!-- text input -->
                 <div class="top">
                <div class="col-md-3">
					<!--<label>Date<em>*</em></label>-->
					<input type="text" class="form-control pd" name="adate" id="adate" value="<?php echo date('d-m-Y'); ?>">
                    
				</div>
                <div class="col-md-3">
					<!--<label>Unit<em>*</em></label>-->
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
                
                
                
               
				
               
				
				
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="col-md-3">
                  <input type="submit" class="btn btn-primary" id="btn" name="submit" value="SHOW" />
                </div>
				<!-- </form>-->
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
              </div>
              <div id="ajax-content-container">
        	  </div>
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
            var adate= $("#adate").val();
			var factoryname= $("#factoryname").val();
            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/checklist_report',
					dataType:"text",
                    data:{ adate:adate,factoryname:factoryname},
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


