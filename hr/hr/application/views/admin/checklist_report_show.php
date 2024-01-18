<style type="text/css">
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 4px;
    line-height: 1;
    vertical-align: top;
    border-top: 1px solid #ddd;
	font-size:12px;
}

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
th,td{font-size:14px;text-align:center;border:1px solid #333333;}
</style>




 


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
                  <h3 class="box-title">Checklist Info</h3>
					
              
                </div>
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>ফ্যাক্টরী</th>
                  <th>শিরোনাম</th>
                  <th>বিষয়সমূহ</th>
                  <th>হ্যাঁ/না</th>
                  <th>মন্তব্য</th>
                  <th>তারিখ</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($cl as $row)
				{ ?>
                <tr>
                  
                  
                  <td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                 
                  <td style="vertical-align:middle;"><?php echo $row['name'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['item'];?></td>
                  <?php if($row['yes_no']==1)
				  {
					  ?>
                     <td style="vertical-align:middle; background-color:#0F0; width:50px;"><i class="fa fa-check" aria-hidden="true"></i>
</td>
				<?php	  
				  }
				  else
				  {
				  ?>
                   <td style="vertical-align:middle; background-color:#F00; width:50px;"><i class="fa fa-times"></i></td>
                   <?php
				  }
				  ?>
                  
                  <td style="vertical-align:middle;"><?php echo $row['comments'];?></td>
                  <?php $cdate = date("d-m-Y", strtotime($row['cdate']));  ?>
                  <td style="vertical-align:middle;"><?php echo $cdate;?></td>
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


  


