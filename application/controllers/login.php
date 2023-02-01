<?php 
class login extends CI_Controller {
	
    public function aksi_login(){
    	$this->load->model('Mlogin');
    	$u = $this->input->post('email');
    	$p = $this->input->post('password');

    	$cek = $this->Mlogin->cek_login($u, $p)->num_rows();

    	if ($cek==1) {
    		$data_session = array(
    					'email' => $u,
    					'status' => 'login' 
    				     );

    		$this->session->set_userdata($data_session);
    		redirect('adminpanel/dashboard');
    	} else {  
            $this->session->set_flashdata('pesan','<div class="alert alert-danger">
                                    Email atau Password Anda Salah</div>');    
            redirect('adminpanel');
        }
    }

    public function logout(){
    	$this->session->sess_destroy();
    	redirect('adminpanel');
	}
}