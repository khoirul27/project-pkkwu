<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cms_model');
        $this->load->library('pagination');
        $this->load->model('Galeri_model', 'galeri');
    }

    public function index()
    {
        $this->db->from('barang');
        $barang = $this->db->get()->result_array();

        $this->db->from('about');
        $about = $this->db->get()->row();

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        //pengaturan pagination
        $config['base_url'] = base_url().'beranda/index';
        $config['total_rows'] = $this->galeri->semuagaleri();
        $config['per_page'] = '3';

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item "><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data = array(
            'konfigurasi'   => $konfigurasi,
            'about'         => $about,
            'barang'        => $barang,
            'galeri'        => $this->galeri->allgaleri($config['per_page'], $data['start']),
            'judul_halaman' => "Halaman Registrasi"
        );
        $this->load->view('brnda', array_merge($data));
    }

    public function detail($id)
    {
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        $this->db->from('barang');
        $this->db->where('id_barang', $id);
        $detail = $this->db->get()->row();

        $this->db->from('foto');
        $this->db->where('id_barang', $id);
        $foto = $this->db->get()->result_array();

        $data = array(
            'konfigurasi'   => $konfigurasi,
            'detail'        => $detail,
            'foto'          => $foto,
            'judul_halaman' => "Halaman Registrasi"
        );
        $this->load->view('detail_barang', array_merge($data));
    }

    public function about()
    {
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        $this->db->from('about');
        $about = $this->db->get()->row();

        $data = array(
            'konfigurasi'   => $konfigurasi,
            'about' => $about
        );
        $this->load->view('about', array_merge($data));
    }
}
