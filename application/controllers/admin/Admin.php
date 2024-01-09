<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
			if($this->session->userdata('id_admin')==NULL){
				redirect('admin/auth');
			}
		}
	public function index()
	{
		$this->db->select('*')->from('admin');
        $this->db->order_by('id_admin','ASC');
        $regis = $this->db->get()->result_array();
        $data = array(
            'regis' => $regis,
            'judul_halaman' => "Halaman Registrasi"
        );
		$this->template->load('admin/template','admin/registrasi',array_merge($data));
	}
    public function registrasi()
	{
		$data = array(
           'username' => $this->input->post('username'),
           'nama' => $this->input->post('nama'),
           'password' => md5($this->input->post('password'))
            
        );
        $this->db->insert('admin',$data);
        redirect('admin/admin/');
	}    

	public function update()
	{
		$data = array(
			'username' => $this->input->post('username'),
		);
		$where = array('id_admin' => $this->input->post('id_admin'));
		$this->db->update('admin', $data, $where);
		redirect('admin/admin/');
	}

	public function hapus($id_admin)
    {
        $where = array('id_admin' => $id_admin);
        $this->db->Delete('admin', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>data berhasil di hapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/admin/');
    }
}
