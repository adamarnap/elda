<?php
class kelas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function kelas(){
        $data['kelas']=$this->Mcrud->get_all_data('kelas')->result();
        $this->template->load('layout_admin','admin/kelas',$data);
    }

    public function add(){
        $this->template->load('layout_admin','admin/form_add_kelas');
    }

    public function save(){
        $nama_kelas = $this->input->post('nama_kelas');
        $dataInsert = array('nama_kelas' => $nama_kelas);
        $this->Mcrud->insert('kelas',$dataInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                    Data Kategori Berhasil Ditambahkan</div>');
        redirect('kelas/kelas'); 
    }

    public function getid($id){
        $dataWhere = array('idKelas' => $id);
        $data['kelas'] = $this->Mcrud->get_by_id('kelas', $dataWhere)->row_object();
        $this->template->load('layout_admin','admin/form_edit_kelas', $data);
    }

    public function edit(){
        $id =$this->input->post('idKelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $dataUpdate = array('nama_kelas' => $nama_kelas);
        $this->Mcrud->update('kelas',$dataUpdate, 'idKelas', $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning">
                                    Data Kategori Berhasil Diedit</div>');
        redirect('kelas/kelas');
    }

    public function delete($idKelas){
        $data = array('idKelas' => $idKelas);
        $this->Mcrud->delete_data($data, 'kelas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">
                                    Data Kategori Berhasil Dihapus</div>');
        redirect('kelas/kelas');
    }
 
}