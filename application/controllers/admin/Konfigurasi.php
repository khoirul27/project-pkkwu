<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_admin') == NULL) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'konfigurasi',
            'konfig' => $konfig
        );
        $this->template->load('admin/template', 'admin/form_konfigurasi', array_merge($data));
    }

    public function update_konfigurasi()
    {
        $namafile = "config" . '.jpg';
        $config['upload_path'] = 'aset/temadmin/img/config';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types'] = '*';
        $config['file_name'] = $namafile;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konfigurasi/' . $this->input->post('foto'));
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $where = array('id_konfigurasi' => 1);
        $data = array(
            'ig' => $this->input->post('ig'),
            'email' => $this->input->post('email'),
            'wa' => $this->input->post('wa'),
            'tiktok' => $this->input->post('tiktok'),
            'alamat' => $this->input->post('alamat'),
            'foto' => $namafile,
            'keterangan' => $this->input->post('keterangan')

        );
        $this->db->update('konfigurasi', $data, $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data galeri berhasil diubah!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
        ');
        redirect('admin/konfigurasi/');
    }

}