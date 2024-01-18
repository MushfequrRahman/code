<style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  
 
  text-align:center;
}
th,td{font-size:14px;text-align:center;}
</style>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      
        
		

      

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
                  <h3 class="box-title">User Info</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?><?php */?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Unit</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Section</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Designation</th>
                  <th>User Type</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/employee/'.$row['image'];?>" alt="User profile picture"></td><?php */?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/emp_imglist_up/<?php echo $bn=$row['userid'];?>"><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/employee/'.$row['image'];?>" alt="User profile picture"></a></td>
                  <td style="vertical-align:middle;"><?php echo $row['unit'];?></td>
                 
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['name'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['department'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['section'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['email'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['mobile'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['designation'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['user_type'];?></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/emp_list_up/<?php echo $bn=$row['userid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:50});
            });
        </script>
                
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