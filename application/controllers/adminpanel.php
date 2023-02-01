<?php 
	class adminpanel extends CI_controller{  
 		public function index(){ 
 			$this->load->view('admin/form_login');
 	 } 

	  public function dashboard(){
		if (empty($this->session->userdata('email'))){
			redirect('adminpanel');
		}
			$this->template->load('layout_admin','dashboard');
	}
}