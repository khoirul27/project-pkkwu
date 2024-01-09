<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $this->db->from('about');
        $about = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'konfigurasi',
            'about'        => $about
        );
        $this->template->load('admin/template', 'admin/form_about', array_merge($data));
    }

    public function update_about()
    {
        $namafile = $this->input->post('nama_foto');
        $config['upload_path']          = 'aset/temadmin/img/about';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']        = '*';
        $config['file_name']            = $namafile;
        $config['overwrite']            = true;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ukuran file terlalu bersar!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
                    ');
            redirect('admin/about/' . $this->input->post('foto'));
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'foto'      => $this->input->post('nama_foto')
        );
        $data = $this->db->update('about', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diubah!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
        ');
        redirect('admin/about/');
    }
}
