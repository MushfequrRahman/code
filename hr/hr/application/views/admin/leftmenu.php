<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Developed By Mushfeq</li>
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='Admin'):?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-building-o" aria-hidden="true"></i>
 <span>Department Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/empdept_insert_form"><i class="fa fa-circle-o"></i> Add Department Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/empdept_list"><i class="fa fa-circle-o"></i> Department List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/empsection_insert_form"><i class="fa fa-circle-o"></i> Add Section Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/empsection_list"><i class="fa fa-circle-o"></i> Section List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/designation_insert_form"><i class="fa fa-circle-o"></i> Add Designation Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/designation_list"><i class="fa fa-circle-o"></i> Designation List</a></li>
            </ul>
        </li>
     	<li class="treeview">
        	<a href="#">
            	<i class="fa fa-id-card" aria-hidden="true"></i> <span>Employee Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/emp_insert_form"><i class="fa fa-circle-o"></i> Add Employee Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/emp_import_excel"><i class="fa fa-circle-o"></i> Add From Excel</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-users"></i> <span>Buyer Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/buyer_insert_form"><i class="fa fa-circle-o"></i> Add Buyer Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>Factory Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/factory_insert_form"><i class="fa fa-circle-o"></i> Add Factory Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i><span>Compliance Report-CAP</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/auditparty_insert_form"><i class="fa fa-circle-o"></i> Add Audit Party</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditparty_list"><i class="fa fa-circle-o"></i>Audit Party list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/audittype_insert_form"><i class="fa fa-circle-o"></i> Add Audit Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/audittype_list"><i class="fa fa-circle-o"></i>Audit Type list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditscope_insert_form"><i class="fa fa-circle-o"></i> Add Audit Scope</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditscope_list"><i class="fa fa-circle-o"></i>Audit Scope list</a></li>
            	<li><a href="<?php echo base_url();?>Dashboard/preaudit_insert_form"><i class="fa fa-circle-o"></i> Add Pre Audit Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_insert_form"><i class="fa fa-circle-o"></i> Add Cap Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/capfile_insert_form"><i class="fa fa-circle-o"></i> Add Cap Report</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i>Department list</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/process_insert_form"><i class="fa fa-circle-o"></i> Add Process</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/process_list"><i class="fa fa-circle-o"></i>Process list</a></li>
            	<li><a href="<?php echo base_url();?>Dashboard/notice_album_form"><i class="fa fa-circle-o"></i>Add Notice Album</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/notice_list"><i class="fa fa-circle-o"></i>Notice Album list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/policy_album_form"><i class="fa fa-circle-o"></i>Add Policy Album</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/policy_list"><i class="fa fa-circle-o"></i>Policy Album list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/sop_album_form"><i class="fa fa-circle-o"></i>Add SOP</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/sop_list"><i class="fa fa-circle-o"></i>SOP Album list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/flowchart_album_form"><i class="fa fa-circle-o"></i>Add Flow Chart</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/flowchart_list"><i class="fa fa-circle-o"></i>Flowchart Album list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/event_album_form"><i class="fa fa-circle-o"></i>Add Event</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/event_list"><i class="fa fa-circle-o"></i>Event List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-list" aria-hidden="true"></i> <span>Check List</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/checklist_serial_insert_form"><i class="fa fa-circle-o"></i> Add Check List Serial</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/checklist_serial"><i class="fa fa-circle-o"></i>Check List Serial</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/checklist_insert_form"><i class="fa fa-circle-o"></i> Add Check List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/checklist_item_form"><i class="fa fa-circle-o"></i>Check List Item</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/checklist_report_form"><i class="fa fa-circle-o"></i>Check List Report</a></li>
            </ul>
        </li>
        <?php endif;?>
        												<!--USER-->
        
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='User'):?>
     	<?php /*?><li class="treeview">
        	<a href="#">
            	<i class="fa fa-users"></i> <span>Employee Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/emp_insert_form"><i class="fa fa-circle-o"></i> Add Employee Info</a></li>
                
            </ul>
        </li><?php */?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-users"></i> <span>Buyer Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/buyer_insert_form"><i class="fa fa-circle-o"></i> Add Buyer Info</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i> <span>Factory Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/factory_insert_form"><i class="fa fa-circle-o"></i> Add Factory Info</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i> <span>Compliance Report-CAP</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/auditparty_insert_form"><i class="fa fa-circle-o"></i> Add Audit Party</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditparty_list"><i class="fa fa-circle-o"></i>Audit Party list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/audittype_insert_form"><i class="fa fa-circle-o"></i> Add Audit Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/audittype_list"><i class="fa fa-circle-o"></i>Audit Type list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditscope_insert_form"><i class="fa fa-circle-o"></i> Add Audit Scope</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditscope_list"><i class="fa fa-circle-o"></i>Audit Scope list</a></li>
            	<li><a href="<?php echo base_url();?>Dashboard/preaudit_insert_form"><i class="fa fa-circle-o"></i> Add Pre Audit Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_insert_form"><i class="fa fa-circle-o"></i> Add Cap Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/capfile_insert_form"><i class="fa fa-circle-o"></i> Add Cap Report</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li><?php */?>
            </ul>
        </li>
        <?php endif;?>
     </ul>
  </section>
    <!-- /.sidebar -->
  </aside>