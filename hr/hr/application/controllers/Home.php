<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//require 'PHPMailer/PHPMailer.php';

class Home extends CI_Controller {

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
	public function index()
	{
		$this->load->database();
		$this->load->model('Home_Model');
		$data['title']='Time AND Action Plan';
		$this->load->view('head',$data);
		$this->load->view('toprightnav');
		$this->load->view('leftmenu');
		$data['all_order_count']=$this->Home_Model->all_order_count();
		$data['all_colour_count']=$this->Home_Model->all_colour_count();
		$data['all_pp_count']=$this->Home_Model->all_ppsample_count();
		$data['all_buyer']=$this->Home_Model->tna_status();
		$this->load->view('home',$data);
		//$this->load->view('footer');
	}
	
	public function search()
	{
		$data['title']='User Login';
		$this->load->view('head',$data);
		$this->load->view('toprightnav');
		
		$this->load->view('home',$data);
	}
	public function creadits()
	{
		$data['title']='Creadits';
		$this->load->view('head',$data);
		$this->load->view('toprightnav');
		$this->load->view('leftmenu');
		$this->load->view('creadits',$data);
	}
	
	
	
	
	
	
}
