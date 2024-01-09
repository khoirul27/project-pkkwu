<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cms_model');
    }
    public function index()
    {
        $this->db->select('*')->from('barang');
        $this->db->order_by('id_barang', 'ASC');
        $barang = $this->db->get()->result_array();
        $data = array(
            'barang' => $barang,
            'judul_halaman' => "Halaman Registrasi"
        );
        $this->template->load('admin/template', 'admin/form_barang', array_merge($data));
    }
    public function simpan()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'tahun'       => $this->input->post('tahun'),
            'harga'       => $this->input->post('harga'),
            'keterangan'  => $this->input->post('keterangan')
        );
        $this->db->insert('barang', $data);
        $this->session->set_flashdata('alert', '
         <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Data barang berhasil di tambhkan!</strong> 
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
       </div>
        ');
        redirect('admin/barang/');
    }

    public function hapus($id_barang)
    {
        $filename = FCPATH . '/aset/temadmin/img/barang/' . $id_barang;
        if (file_exists($filename)) {
            unlink("./aset/temadmin/img/barang/" . $id_barang);
        }

        $where = array('foto' => $id_barang);

        $this->db->Delete('foto', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data barang berhasil dihapus!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
        ');
        redirect('admin/barang/');
    }

    public function update()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'tahun'       => $this->input->post('tahun'),
            'harga'       => $this->input->post('harga'),
            'keterangan'  => $this->input->post('keterangan')
        );
        $where = array(
            'id_barang'   => $this->input->post('id_barang')
        );
        $data = $this->db->update('barang', $data, $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data barang berhasil diubah!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
        ');
        redirect('admin/barang/');
    }

    public function hapus_all($id_barang)
    {
        $this->db->select('foto')->from('foto')->where('id_barang', $id_barang);
        $data = $this->db->get()->result_array();

        foreach ($data as $row) {
            $filename = FCPATH . '/aset/temadmin/img/barang/' . $row['foto'];

            if (file_exists($filename)) {
                unlink($filename);
            }

            $where = array('foto' => $row['foto']);
            $this->db->delete('foto', $where);
        }
        $wheree = array('id_barang' => $id_barang);
        $this->db->delete('barang', $wheree);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data barang berhasil dihapus!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
        ');
        redirect('admin/barang/');
    }
}
