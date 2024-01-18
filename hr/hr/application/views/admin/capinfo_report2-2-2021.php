<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>Serial</th>
                  <th>Audit Party</th>
                  <th>Audit Type</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php foreach($cr as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="fsl" id="fsl" value="<?php echo $row['fsl'];?>"></td>
                 
                  <td style="vertical-align:middle;"><?php echo $row['auditparty'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['audittype'];?></td>
                 
                  
                </tr>
                </tbody>
               <?php } ?>
               
              </table>
              <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" id="btn1" name="submit" value="INSERT" />
                </div>