<?php
class guru extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function guru(){
        $data['guru']=$this->Mcrud->get_all_data('guru')->result();
        $this->template->load('layout_admin','admin/profile_guru',$data);
    }

    public function add(){
        $this->template->load('layout_admin','admin/form_add_guru');
    }

    public function save(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $NIP = $this->input->post('NIP');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $mata_pelajaran = $this->input->post('NIP');
        $idKelas = $this->input->post('idKelas');
        $dataInsert = array('email' => $email,
                            'password' => $password,
                            'NIP' => $NIP,
                            'nama_lengkap' => $nama_lengkap,
                            'mata_pelajaran' => $mata_pelajaran,
                            'idKelas' => $idKelas);
        $this->Mcrud->insert($dataInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                    Data Kategori Berhasil Ditambahkan</div>');
        redirect('guru/guru'); 
    }

    public function getid($id){
        $dataWhere = array('NIP' => $NIP);
        $data['guru'] = $this->Mcrud->get_by_id('guru', $dataWhere)->row_object();
        $this->template->load('layout_admin','admin/kategori/form_edit', $data);
    }

    public function edit(){
        $id =$this->input->post('idKat');
        $namaKategori = $this->input->post('namaKategori');
        $dataUpdate = array('namaKat' => $namaKategori);
        $this->Mcrud->update('tbl_kategori',$dataUpdate, 'idKat', $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning">
                                    Data Kategori Berhasil Diedit</div>');
        redirect('kategori');
    }

    public function delete($idKat){
        $data = array('idKat' => $idKat);
        $this->Mcrud->delete_data($data, 'tbl_kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">
                                    Data Kategori Berhasil Dihapus</div>');
        redirect('kategori');
    }
 
}