<style type="text/css">
.profile-user-img {
    margin: 0 auto;
    width: 150px;
    padding: 3px;
    border: 1px solid #d2d6de;
}
ul.gallery{    
margin-left: 3vw;     
margin-right:3vw;  
}    

.zoom {      
-webkit-transition: all 0.35s ease-in-out;    
-moz-transition: all 0.35s ease-in-out;    
transition: all 0.35s ease-in-out;     
cursor: -webkit-zoom-in;      
cursor: -moz-zoom-in;      
cursor: zoom-in;  
}     

.zoom:hover,  
.zoom:active,   
.zoom:focus {
/**adjust scale to desired size, 
add browser prefixes**/
-ms-transform: scale(5.5);    
-moz-transform: scale(5.5);  
-webkit-transform: scale(5.5);  
-o-transform: scale(5.5);  
transform: scale(5.5);    
position:relative;      
z-index:1000;  
}

/**To keep upscaled images visible on mobile, 
increase left & right margins a bit**/  
@media only screen and (max-width: 768px) {   
ul.gallery {      
margin-left: 15vw;       
margin-right: 15vw;
}

/**TIP: Easy escape for touch screens,
give gallery's parent container a cursor: pointer.**/
.DivName {cursor: pointer}
}
</style>

				<ul class="list-inline gallery"> 
                <?php 
				
				foreach($alle as $row)
				{ ?>
                             <li class="list-inline-item"><img class="profile-user-img img-responsive img-thumbnail zoom" src="<?php echo base_url().'assets/uploads/event/'.$row['eventfile'];?>" alt="event image"></li>
                  
                  
                
               <?php } ?>
              
                   </ul> 
				
                
                
                
                
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                
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


