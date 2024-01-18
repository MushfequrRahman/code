<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
		 parent::__construct();
		 //$this->load->library('session');
		
			if(!$this->session->userdata('userid'))
				{
					redirect('User_Login');
				}
	 }
	 public function index()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Dashboard';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_op_count']=$this->Admin->all_op_count();
		//$data['dstatus']=$this->Admin->dashboard_status();
		$this->load->view('admin/dashboard',$data);
	 }
	 public function empdept_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/empdept_insert_form',$data);
				
	 }
	
	 public function empdept_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditparty=$this->form_validation->set_rules('empdept', 'Department', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->empdept_insert_form();
				}
			else
				{
					$empdept=$this->input->post('empdept');
					
					
					
					
			
			
					$ins=$this->Admin->empdept_insert($empdept);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/empdept_insert_form','refresh');
				}
		}
	}
	public function empdept_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dl']=$this->Admin->empdept_list();
		$this->load->view('admin/empdept_list',$data);
				
	 }
	public function empsection_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Section Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dl']=$this->Admin->empdept_list();

		$this->load->view('admin/empsection_insert_form',$data);
				
	 }
	public function empsection_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$department=$this->form_validation->set_rules('department', 'Department', 'required');
			$section=$this->form_validation->set_rules('section', 'Section', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->empsection_insert_form();
				}
			else
				{
					$department=$this->input->post('department');
					$section=$this->input->post('section');
					$ins=$this->Admin->empsection_insert($department,$section);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/empsection_insert_form','refresh');
				}
		}
	}
	public function empsection_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['sl']=$this->Admin->empsection_list();
		$this->load->view('admin/empsection_list',$data);
				
	 }
	public function show_sectionname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$department = $this->input->get('department');
		$data=$this->Admin->show_sectionname($department);
		echo json_encode($data); 
	}
	public function designation_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/designation_insert_form',$data);
				
	 }
	
	 public function designation_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditparty=$this->form_validation->set_rules('designation', 'Designation', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->designation_insert_form();
				}
			else
				{
					$empdept=$this->input->post('designation');
					
					
					
					
			
			
					$ins=$this->Admin->designation_insert($empdept);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/designation_insert_form','refresh');
				}
		}
	}
	public function designation_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Designation List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dl']=$this->Admin->designation_list();
		$this->load->view('admin/designation_list',$data);
				
	 }
	public function emp_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->empdept_list();
		$data['dl']=$this->Admin->designation_list();
		$this->load->view('admin/emp_insert_form',$data);
				
	 }
	public function emp_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$userid=$this->form_validation->set_rules('userid', 'User ID', 'required');
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$department=$this->form_validation->set_rules('department', 'Department', 'required');
			$section=$this->form_validation->set_rules('section', 'Section', 'required');
			$empname=$this->form_validation->set_rules('empname', 'Employee Name', 'required');
			$password=$this->form_validation->set_rules('password', 'Password', 'required');
			$email=$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$mobile=$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$designation=$this->form_validation->set_rules('designation', 'Designation', 'required');
			$user_type=$this->form_validation->set_rules('user_type', 'User Type', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->emp_insert_form();
				}
			else
				{
					$userid=$this->input->post('userid');
					$unit=$this->input->post('unit');
					$department=$this->input->post('department');
					$section=$this->input->post('section');
					$empname=$this->input->post('empname');
					$password=$this->input->post('password');
					$email=$this->input->post('email');
					$mobile=$this->input->post('mobile');
					$designation=$this->input->post('designation');
					$user_type=$this->input->post('user_type');
					$config['upload_path']          = APPPATH. '../assets/uploads/employee';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->emp_insert($pic_file,$userid,$unit,$department,$section,$empname,$password,$email,$mobile,$designation,$user_type);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/emp_insert_form','refresh');
				}
		}
	}
	public function emp_import_excel()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/emp_import_excel',$data);
				
	 }
	public function user_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/user_list',$data);
				
	 }
	 public function emp_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Info Update';
		$userid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->empdept_list();
		$data['allde']=$this->Admin->designation_list();
		$data['elup']=$this->Admin->emp_list_up($userid);
		$this->load->view('admin/emp_list_up',$data);
	 }
	public function elup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$unit=$this->input->post('unit');
			$department=$this->input->post('department');
			$section=$this->input->post('section');
			$empname=$this->input->post('empname');
			$password=$this->input->post('password');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$designation=$this->input->post('designation');
			//$user_type=$this->input->post('user_type');
			$ins=$this->Admin->elup($unit,$department,$section,$userid,$empname,$password,$email,$mobile,$designation);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/user_list','refresh');
				
		}
	 }
	  public function emp_imglist_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Info Update';
		$userid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['alld']=$this->Admin->empdept_list();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['elup']=$this->Admin->emp_list_up($userid);
		$this->load->view('admin/emp_imglist_up',$data);
	 }
	public function eimglup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$config['upload_path']          = APPPATH. '../assets/uploads/employee';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$ins=$this->Admin->eimglup($userid,$pic_file);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/user_list','refresh');
				
		}
	 }
	public function buyer_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/buyer_insert_form',$data);
				
	 }
	 public function buyer_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$buyername=$this->form_validation->set_rules('buyername', 'Buyer Name', 'required');
			$origin=$this->form_validation->set_rules('origin', 'Origin', 'required');
			
			$local_address=$this->form_validation->set_rules('local_address', 'Local Address', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->buyer_insert_form();
				}
			else
				{
					$buyername=$this->input->post('buyername');
					$origin=$this->input->post('origin');
					$local_address=$this->input->post('local_address');
					
					
					$config['upload_path']          = APPPATH. '../assets/uploads/buyer';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->buyer_insert($pic_file,$buyername,$origin,$local_address);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/buyer_insert_form','refresh');
				}
		}
	}
	public function buyer_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->buyer_list();
		$this->load->view('admin/buyer_list',$data);
				
	 }
	 public function buyer_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Info Update';
		$buyername= urldecode($this->uri->segment(3));
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['blup']=$this->Admin->buyer_list_up($buyername);
		$this->load->view('admin/buyer_list_up',$data);
	 }
	 public function blup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$buyer=$this->input->post('buyer');
			$buyername=$this->input->post('buyername');
			$origin=$this->input->post('origin');
			$local_address=$this->input->post('local_address');
			
			$ins=$this->Admin->blup($buyer,$buyername,$origin,$local_address);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/buyer_list','refresh');
				
		}
	 }
	  public function buyer_imglist_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Info Update';
		$buyername= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['alld']=$this->Admin->empdept_list();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['bimglup']=$this->Admin->buyer_list_up($buyername);
		$this->load->view('admin/buyer_imglist_up',$data);
	 }
	 public function bimglup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$buyername=$this->input->post('buyername');
			$config['upload_path']          = APPPATH. '../assets/uploads/buyer';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$ins=$this->Admin->bimglup($buyername,$pic_file);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/buyer_list','refresh');
				
		}
	 }
	 public function factory_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Factory Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/factory_insert_form',$data);
				
	 }
	 
	 public function fac_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$facid=$this->form_validation->set_rules('facid', 'Factory ID', 'required');
			$facname=$this->form_validation->set_rules('facname', 'Factory Name', 'required');
			
			$fac_address=$this->form_validation->set_rules('fac_address', 'Factory Address', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->fac_insert_form();
				}
			else
				{
					$facid=$this->input->post('facid');
					$facname=$this->input->post('facname');
					$fac_address=$this->input->post('fac_address');
					
					
					
			
			
					$ins=$this->Admin->fac_insert($facid,$facname,$fac_address);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/factory_insert_form','refresh');
				}
		}
	}
	public function factory_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Factory List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$this->load->view('admin/factory_list',$data);
				
	 }
	 public function factory_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Factory Info Update';
		$facid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['flup']=$this->Admin->factory_list_up($facid);
		$this->load->view('admin/factory_list_up',$data);
	 }
	 public function flup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$fid=$this->input->post('fid');
			$facid=$this->input->post('facid');
			$factoryname=$this->input->post('factoryname');
			$factory_address=$this->input->post('factory_address');
			
			$ins=$this->Admin->flup($fid,$facid,$factoryname,$factory_address);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/factory_list','refresh');
				
		}
	 }
	 public function auditparty_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Party Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/auditparty_insert_form',$data);
				
	 }
	
	  public function auditparty_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditparty=$this->form_validation->set_rules('auditparty', 'Audit Party', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->auditparty_insert_form();
				}
			else
				{
					$auditparty=$this->input->post('auditparty');
					
					
					
					
			
			
					$ins=$this->Admin->auditparty_insert($auditparty);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/auditparty_insert_form','refresh');
				}
		}
	}
	public function auditparty_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Party List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->auditparty_list();
		$this->load->view('admin/auditparty_list',$data);
				
	 }
	public function audittype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		//$data['bl']=$this->Admin->buyer_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/audittype_insert_form',$data);
				
	 }
	 public function audittype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$audittype=$this->form_validation->set_rules('audittype', 'Audit Type', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->auditparty_insert_form();
				}
			else
				{
					$audittype=$this->input->post('audittype');
					
					
					
					
			
			
					$ins=$this->Admin->audittype_insert($audittype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/audittype_insert_form','refresh');
				}
		}
	}
	public function audittype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Party List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->audittype_list();
		$this->load->view('admin/audittype_list',$data);
				
	 }
	public function auditscope_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Scope Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		//$data['bl']=$this->Admin->buyer_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/auditscope_insert_form',$data);
				
	 }
	 public function auditscope_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditscope=$this->form_validation->set_rules('auditscope', 'Audit Scope', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->auditscope_insert_form();
				}
			else
				{
					$auditscope=$this->input->post('auditscope');
					
					
					
					
			
			
					$ins=$this->Admin->auditscope_insert($auditscope);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/auditscope_insert_form','refresh');
				}
		}
	}
	public function auditscope_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Scope List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->auditscope_list();
		$this->load->view('admin/auditscope_list',$data);
				
	 }
	 public function preaudit_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Pre Audit Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		$data['allscope']=$this->Admin->auditscope_list();
		$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/preaudit_insert_form',$data);
				
	 }
	public function preauditinfo_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$factoryname=$this->form_validation->set_rules('factoryname', 'Factory Name', 'required');
			$buyername=$this->form_validation->set_rules('buyername', 'Buyer Name', 'required');
			$auditparty=$this->form_validation->set_rules('auditparty', 'Audit Party', 'required');
			$audittype=$this->form_validation->set_rules('audittype', 'Audit Type', 'required');
			$auditscope=$this->form_validation->set_rules('auditscope', 'Audit Scope', 'required');
			$fsl=$this->form_validation->set_rules('fsl[]', 'Finding Serial', 'required');
			$findings=$this->form_validation->set_rules('findings[]', 'Findings', 'required');
			$observation=$this->form_validation->set_rules('observation[]', 'Observation', 'required');
			//$ship_date=$this->form_validation->set_rules('ship_date[]', 'Ship Date', 'required');
			if($this->form_validation->run()==FALSE)
			{
				$this->preaudit_insert_form();
			}
			else
			{
				$factoryname=$this->input->post('factoryname');
				$adate=$this->input->post('adate');
				$buyername=$this->input->post('buyername');
				$auditparty=$this->input->post('auditparty');
				$audittype=$this->input->post('audittype');
				$auditscope=$this->input->post('auditscope');
				$fsl=$this->input->post('fsl');
				$findings=$this->input->post('findings');
				$observation=$this->input->post('observation');
				$config['upload_path']          = APPPATH. '../assets/uploads/preaudit';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pdf_file = $upload_data['file_name'];
				
				for($i=0;$i<count($fsl);$i++)
					{
						$data["factoryname"]=$factoryname;
						$data["adate"]=$adate;
						$data["buyername"]=$buyername;
						$data["auditparty"]=$auditparty;
						$data["audittype"]=$audittype;
						$data["auditscope"]=$auditscope;
						//$data["pdf_file"]=$pdf_file;
						$data["fsl"]=$fsl[$i];
						$data["findings"]=$findings[$i];
						$data["observation"]=$observation[$i];
						//$data["fscolour_qty"]=$fscolour_qty[$i];
						//$data["ship_date"]=$ship_date[$i];
						$ins=$this->Admin->preauditinfo_insert($data);
						//$ins1=$this->Admin->preauditinfo_pdfinsert($data);
					}
					$ins1=$this->Admin->preauditinfo_pdfinsert($factoryname,$buyername,$audittype,$pdf_file,$adate);
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/preaudit_insert_form','refresh');
			}
		}
	}
	public function cap_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/cap_insert_form',$data);
				
	 }
	public function capinfo_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info List';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$factoryname = $this->input->post('factoryname');
		$buyername = $this->input->post('buyername');
		$audittype = $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capinfo_report($adate,$factoryname,$buyername,$audittype);
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/capinfo_report',$data);
		//$this->load->view('admin/cap_insert_form',$data);
				
	 }
	 public function capinfo_report_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
				$chpreaid=$this->input->post('chpreaid');
				$preaid=$this->input->post('preaid');
				$cap=$this->input->post('cap');
				$pr=$this->input->post('pr');
				$pd=$this->input->post('pd');
				$wd=$this->input->post('wd');
				
				
				for($i=0;$i<count($preaid);$i++)
					{
						$data["chpreaid"]=$chpreaid[$i];
						$data["preaid"]=$preaid[$i];
						$data["cap"]=$cap[$i];
						$data["pr"]=$pr[$i];
						$data["pd"]=$pd[$i];
						$data["wd"]=$wd[$i];
						$_FILES['file']['name'] = $_FILES['pic_file']['name'][$i];
         				$_FILES['file']['type'] = $_FILES['pic_file']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['pic_file']['error'][$i];
						$_FILES['file']['size'] = $_FILES['pic_file']['size'][$i];
 						$config['upload_path'] = APPPATH. '../assets/uploads/capreport'; 
          				$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$config['max_size'] = '100000';
		  				$config['file_name'] = $_FILES['pic_file']['name'][$i];
						$config['file_name']=time().$config['file_name'];
						//$pic_file = $upload_data['pic_file'];
						$this->load->library('upload',$config); 
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('file')){
						$error = array('error' => $this->upload->display_errors());
            			$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						$data['totalFiles'][] = $filename;	
		  			}
						
						//$data["pic_file"]=$pic_file;
						$data['pic_file']=$config['file_name'];
						$ins=$this->Admin->capinfo_report_insert($data);
					}
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/cap_insert_form','refresh');
			//}
		}
	}
	public function cap_status_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/cap_status_form',$data);
				
	 }
	 public function capstatus_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info List';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$buyername = $this->input->post('buyername');
		$factoryname = $this->input->post('factoryname');
		$audittype= $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capstatus_report($adate,$factoryname,$buyername,$audittype);
		$this->load->view('admin/capstatus_report',$data);
		//$this->load->view('admin/cap_insert_form',$data);
				
	 }
	 public function capfile_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/capfile_insert_form',$data);
				
	 }
	 public function capfile_upload()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info List';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$factoryname = $this->input->post('factoryname');
		$buyername = $this->input->post('buyername');
		$audittype = $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capfile_upload($adate,$factoryname,$buyername,$audittype);
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/capfile_upload',$data);
		//$this->load->view('admin/cap_insert_form',$data);
				
	 }
	 public function cap_status_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
				
				$preaid=$this->input->post('preaid');
				$ratings=$this->input->post('ratings');
				$status=$this->input->post('status');
				
				
				
				for($i=0;$i<count($preaid);$i++)
					{
						
						$data["preaid"]=$preaid[$i];
						$data["ratings"]=$ratings[$i];
						$data["status"]=$status[$i];
						
						$ins=$this->Admin->cap_status_insert($data);
					}
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/cap_status_form','refresh');
			//}
		}
	}
	public function capfile_upload_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
				$factoryname=$this->input->post('factoryname');
				$buyername=$this->input->post('buyername');
				$audittype=$this->input->post('audittype');
				$auditdate=$this->input->post('auditdate');
				
				
				
				
$_FILES['file']['name'] = $_FILES['pic_file']['name'];
          $_FILES['file']['type'] = $_FILES['pic_file']['type'];

          $_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'];

          $_FILES['file']['error'] = $_FILES['pic_file']['error'];

          $_FILES['file']['size'] = $_FILES['pic_file']['size'];
 $config['upload_path'] = APPPATH. '../assets/uploads/capreport'; 
          $config['allowed_types'] = 'jpg|pdf';

          $config['max_size'] = '100000';
		  
$config['file_name'] = $_FILES['pic_file']['name'];
$config['file_name']=time().$config['file_name'];
			//$pic_file = $upload_data['pic_file'];
						
					          $this->load->library('upload',$config); 
							  $this->upload->initialize($config);

    

          if(!$this->upload->do_upload('file')){
$error = array('error' => $this->upload->display_errors());
            $uploadData = $this->upload->data();

            $pdf_file = $uploadData['file_name'];
			
		  }
						
						
						
						//$data['pic_file']=$config['file_name'];
						
						
						
						$ins=$this->Admin->capfile_upload_insert($factoryname,$buyername,$audittype,$auditdate,$pdf_file);
					
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/capfile_insert_form','refresh');
			//}
		}
	}
	public function cap_fullr_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/cap_fullr_form',$data);
				
	 }
	 public function capfull_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Details Report';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$buyername = $this->input->post('buyername');
		$factoryname = $this->input->post('factoryname');
		$audittype= $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capfull_report($adate,$factoryname,$buyername,$audittype);
		$data['cr1']=$this->Admin->preauditfile_report($adate,$factoryname,$buyername,$audittype);
		$data['cr2']=$this->Admin->capauditfile_report($adate,$factoryname,$buyername,$audittype);
		$this->load->view('admin/capfull_report',$data);
	}
	public function chart_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/chart_form',$data);
	}
	public function bar_chart() {

   $this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$buyername = $this->input->post('buyername');
		$factoryname = $this->input->post('factoryname');
		$audittype= $this->input->post('audittype');
		//$data['cr']=$this->Admin->bar_chart($adate,$factoryname,$buyername,$audittype);
      	//$query =  $this->db->query("SELECT preaid,ratings FROM capreport"); 
		$query=$this->db->query("SELECT preauditinfo.preaid,preauditinfo.factoryname,preauditinfo.buyername,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.fsl,preauditinfo.findings,preauditinfo.observation,preauditinfo.auditdate,preauditinfopdf.preauditpdf,capreport.cap,capreport.pr,capreport.tardate,capreport.comdate,capreport.capimage,capreport.ratings,capreport.status,capreportpdf.pdffile,user.name 
		FROM preauditinfo 
		 JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		LEFT JOIN user ON
		user.userid=capreport.pr
		LEFT JOIN preauditinfopdf ON
		preauditinfopdf.factoryname=preauditinfo.factoryname AND
		preauditinfopdf.buyername=preauditinfo.buyername AND
		preauditinfopdf.audittype=preauditinfo.audittype AND
		preauditinfopdf.preaudate=preauditinfo.auditdate
		LEFT JOIN capreportpdf ON
		capreportpdf.factoryname=preauditinfo.factoryname AND
		capreportpdf.buyername=preauditinfo.buyername AND
		capreportpdf.audittype=preauditinfo.audittype AND
		capreportpdf.auditdate=preauditinfo.auditdate
		WHERE preauditinfo.factoryname='$factoryname' AND preauditinfo.buyername='$buyername' AND preauditinfo.audittype='$audittype' AND preauditinfo.auditdate='$adate' ORDER BY preauditinfo.fsl");
		$record = $query->result();
		$data = array();
		foreach($record as $row) 
			{
				$data['label'][] = $row->auditscope;
				$data['data'][] = (int) $row->ratings;
			}
		$data['chart_data'] = json_encode($data);
	  	$data['chart_data1'] =$record;
		$this->load->view('admin/chart',$data);
	}
	public function emp_importexcel()
	{
		$this->load->database();
		$this->load->model('Admin');
    	if($this->input->post('upload') != NULL )
		{ 
       		$data = array(); 
       		if(!empty($_FILES['file']['name']))
			{ 
         		// Set preference 
        		$config['upload_path'] = 'assets/uploads/employee/csv/'; 
         		$config['allowed_types'] = 'csv'; 
         		$config['max_size'] = '1000'; // max_size in kb 
         		$config['file_name'] = $_FILES['file']['name'];
				// Load upload library 
         		$this->load->library('upload',$config); 
 				// File upload
        	 	if($this->upload->do_upload('file'))
			 		{ 
            			// Get data about the file
            			$uploadData = $this->upload->data(); 
           				$filename = $uploadData['file_name'];
						// Reading file
            			$file = fopen("assets/uploads/employee/csv/".$filename,"r");
            			$i = 0;
           				$headerLine = true;
            			while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) 
							{
               					$num = count($filedata );
			   					if($headerLine) 
									{ 
										$headerLine = false; 
									}
							
        						else 
									{
			   							$data['fname']=$filedata[0];
			   							$data['lname']=$filedata[1];
										$ins=$this->Admin->insertRecord($data);
										if($ins==TRUE)
											{
												$this->session->set_flashdata('Successfully','Successfully Inserted');
											}
										else
											{
				 								$this->session->set_flashdata('Successfully','Failed To Inserted');
											}
										
									}
               		}
			   			$i++;
						redirect('Dashboard/emp_import_excel','refresh');
         	}
            fclose($file);
			}
   
		}
  }
  public function department_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/department_insert_form',$data);
				
	 }
	
	  public function department_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditparty=$this->form_validation->set_rules('department', 'Department Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->department_insert_form();
				}
			else
				{
					$department=$this->input->post('department');
					
					
					
					
			
			
					$ins=$this->Admin->department_insert($department);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/department_insert_form','refresh');
				}
		}
	}
	public function process_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Process Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/process_insert_form',$data);
				
	 }
	
	  public function process_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditparty=$this->form_validation->set_rules('process', 'Process Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->process_insert_form();
				}
			else
				{
					$process=$this->input->post('process');
					
					
					
					
			
			
					$ins=$this->Admin->process_insert($process);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/process_insert_form','refresh');
				}
		}
	}
	public function department_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->department_list();
		$this->load->view('admin/department_list',$data);
				
	 }
	public function process_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Process List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->process_list();
		$this->load->view('admin/process_list',$data);
				
	 }
  public function notice_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Notice Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/notice_album_form',$data);
				
	 }
 public function notice_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$noticename=$this->form_validation->set_rules('noticename', 'Notice Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->notice_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					$noticename=$this->input->post('noticename');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/notice';
					$config['allowed_types']        = 'jpg|png|pdf';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->notice_insert($pic_file,$unit,$noticename);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/notice_album_form','refresh');
				}
		}
	}
	public function notice_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Notice List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->notice_list();
		$this->load->view('admin/notice_list',$data);
				
	 }
	public function policy_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Policy Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->department_list();
		$data['allp']=$this->Admin->process_list();
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/policy_album_form',$data);
				
	 }
	public function policy_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$department=$this->form_validation->set_rules('department', 'Department Name', 'required');
			$process=$this->form_validation->set_rules('process', 'Process Name', 'required');
			$user=$this->form_validation->set_rules('user', 'User Name', 'required');
			$policyname=$this->form_validation->set_rules('policyname', 'Policy Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->policy_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					$department=$this->input->post('department');
					$process=$this->input->post('process');
					$user=$this->input->post('user');
					$policyname=$this->input->post('policyname');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/policy';
					$config['allowed_types']        = 'jpg|png|pdf';
					$config['max_size']             = 5000000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->policy_insert($pic_file,$unit,$department,$process,$user,$policyname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/policy_album_form','refresh');
				}
		}
	}
   public function policy_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Policy List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->policy_list();
		$this->load->view('admin/policy_list',$data);
				
	 }
	 public function sop_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='SOP Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->department_list();
		$data['allp']=$this->Admin->process_list();
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/sop_album_form',$data);
				
	 }
	public function sop_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$department=$this->form_validation->set_rules('department', 'Department Name', 'required');
			$process=$this->form_validation->set_rules('process', 'Process Name', 'required');
			$user=$this->form_validation->set_rules('user', 'User Name', 'required');
			$policyname=$this->form_validation->set_rules('policyname', 'Policy Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->sop_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					$department=$this->input->post('department');
					$process=$this->input->post('process');
					$user=$this->input->post('user');
					$policyname=$this->input->post('policyname');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/sop';
					$config['allowed_types']        = 'jpg|png|pdf';
					$config['max_size']             = 5000000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->sop_insert($pic_file,$unit,$department,$process,$user,$policyname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/sop_album_form','refresh');
				}
		}
	}
   public function sop_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Policy List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->sop_list();
		$this->load->view('admin/sop_list',$data);
				
	 }
   public function flowchart_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Flowchart Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->department_list();
		$data['allp']=$this->Admin->process_list();
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/flowchart_album_form',$data);
				
	 }
	public function flowchart_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$department=$this->form_validation->set_rules('department', 'Department Name', 'required');
			$process=$this->form_validation->set_rules('process', 'Process Name', 'required');
			$user=$this->form_validation->set_rules('user', 'User Name', 'required');
			$policyname=$this->form_validation->set_rules('policyname', 'Policy Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->flowchart_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					$department=$this->input->post('department');
					$process=$this->input->post('process');
					$user=$this->input->post('user');
					$policyname=$this->input->post('policyname');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/flowchart';
					$config['allowed_types']        = 'jpg|png|pdf';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->flowchart_insert($pic_file,$unit,$department,$process,$user,$policyname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/flowchart_album_form','refresh');
				}
		}
	}
   public function flowchart_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Flowchart List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->flowchart_list();
		$this->load->view('admin/flowchart_list',$data);
				
	 }
	public function checklist_serial_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='CheckList Serial Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->department_list();
		$data['allp']=$this->Admin->process_list();
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/checklist_serial_insert_form',$data);
				
	 }
	public function checklist_serial_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			
			$sname=$this->form_validation->set_rules('sname', 'Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->checklist_serial_insert_form();
				}
			else
				{
					
					
					$sname=$this->input->post('sname');
					
			
					
					$ins=$this->Admin->checklist_serial_insert($sname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/checklist_serial_insert_form','refresh');
				}
		}
	}
	public function checklist_serial()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Check List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->checklist_serial();
		$this->load->view('admin/checklist_serial',$data);
				
	 }
	public function checklist_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='CheckList Serial Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['allcs']=$this->Admin->checklist_serial();
		
		$this->load->view('admin/checklist_insert_form',$data);
				
	 }
	public function checklisttinfo_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			
			$checklistname=$this->form_validation->set_rules('checklistname[]', 'checklist Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->checklist_insert_form();
				}
			else
				{
					
					
					$factoryname=$this->input->post('factoryname');
					$checklistserial=$this->input->post('checklistserial');
					$checklistname=$this->input->post('checklistname');
					
			for($i=0;$i<count($checklistname);$i++)
					{
						$data["factoryname"]=$factoryname;
						
						$data["checklistserial"]=$checklistserial;
						
						$data["checklistname"]=$checklistname[$i];
						$ins=$this->Admin->checklist_insert($data);
						
					}
					
					
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/checklist_insert_form','refresh');
				}
		}
	}
	public function checklist_item_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Check List Item';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['allcs']=$this->Admin->checklist_serial();
		$this->load->view('admin/checklist_item_form',$data);
				
	 }
	public function checklisttinfo_show()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Check List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$factoryname=$this->input->post('factoryname');
		$checklistserial=$this->input->post('checklistserial');
		$data['ul']=$this->Admin->checklisttinfo_show($factoryname,$checklistserial);
		$this->load->view('admin/checklistinfo_show',$data);
				
	 }
   public function checklisttinfo_check_insert()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Check List';
//		$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');

		
		if($this->input->post('submit'))
		{
			$factoryname=$this->input->post('factoryname');
		$name=$this->input->post('name');
		$item=$this->input->post('item');
		//print_r($item);
		$yes_no=$this->input->post('yes_no');
		
		//$no=$this->input->post('no');
		
		$comments=$this->input->post('comments');
		$cdate=$this->input->post('cdate');
			for($i=0;$i<count($item);$i++)
					{
						
						$data["factoryname"]=$factoryname[$i];
						$data["name"]=$name[$i];
						$data["item"]=$item[$i];
						$data["yes_no"]=$yes_no[$i];
						//$data["no"]=$no[$i];
						//print_r($yess);
						$data["comments"]=$comments[$i];
						$data["cdate"]=$cdate;
						
						$ins=$this->Admin->checklistinfo_check_insert($data);
					}
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/checklist_item_form','refresh');
	 }
		
				
	 }
	public function checklist_report_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Check List Report';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
//		$data['alld']=$this->Admin->department_list();
//		$data['allp']=$this->Admin->process_list();
//		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/checklist_report_form',$data);
				
	 }
	 public function checklist_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Check List';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$factoryname=$this->input->post('factoryname');
		$adate=$this->input->post('adate');
		$data['cl']=$this->Admin->checklist_report($factoryname,$adate);
		$this->load->view('admin/checklist_report_show',$data);
				
	 }
   public function event_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Event Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
//		$data['alld']=$this->Admin->department_list();
//		$data['allp']=$this->Admin->process_list();
//		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/event_album_form',$data);
				
	 }
   public function eventalbum_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$eventname=$this->form_validation->set_rules('eventname', 'Event Name', 'required');
			
			if($this->form_validation->run()==FALSE)
			{
				$this->event_album_form();
			}
			else
			{
				$eventname=$this->input->post('eventname');
				$edate=$this->input->post('edate');
				//$pic_file=$this->input->post('pic_file');
				
			$count = count($_FILES['pic_file']['name']);
				
				for($i=0;$i<$count;$i++)
					{
						$data["eventname"]=$eventname;
						$data["edate"]=$edate;
						
						$_FILES['file']['name'] = $_FILES['pic_file']['name'][$i];
         				$_FILES['file']['type'] = $_FILES['pic_file']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['pic_file']['error'][$i];
						$_FILES['file']['size'] = $_FILES['pic_file']['size'][$i];
 						$config['upload_path'] = APPPATH. '../assets/uploads/event'; 
          				$config['allowed_types'] = 'jpg|png';
						$config['max_size'] = '5000000';
		  				$config['file_name'] = $_FILES['pic_file']['name'][$i];
						$config['file_name']=time().$config['file_name'];
						//$pic_file = $upload_data['pic_file'];
						$this->load->library('upload',$config); 
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('file')){
						$error = array('error' => $this->upload->display_errors());
            			$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						$data['totalFiles'][] = $filename;	
		  			}
						
						//$data["pic_file"]=$pic_file;
						$data['pic_file']=$config['file_name'];
						//echo $data['pic_file'];
						
						$ins=$this->Admin->eventalbum_insert($data);
					}
					
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/event_album_form','refresh');
			}
		}
	}
	 public function event_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Event Info';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['alle']=$this->Admin->event_list();

		$this->load->view('admin/event_list',$data);
				
	 }
	 public function event_list_show()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Event Info';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
//$eventname= $this->uri->segment(3);
		$eventname=$this->input->post('eventname');
		$data['alle']=$this->Admin->event_list_show($eventname);

		$this->load->view('admin/event_list_show',$data);
				
	 }
	 
}
