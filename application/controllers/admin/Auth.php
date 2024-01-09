<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('admin');
        $this->db->where('username', $username)->where('password', $password);
        $data = $this->db->get()->row();
        if ($data == NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username atau password salah!</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
            ');
            redirect('admin/auth');
        } else {
            $userdata = array(
                'id_admin'    => $data->id_admin,
                'username'    => $data->username,
                'password'    => $data->password,
            );
        }
        $this->session->set_userdata($userdata);
        $log = [
            'log_login' =>  date('YmdHis')
        ];
        $this->db->update('admin',$log,$userdata);
        redirect('admin/dashboard');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/auth');
    }

    public function ubah_password()
    {
        $password_baru = [
            'password' => md5($this->input->post('password_baru'))
        ];

        $username = $this->input->post('username');
        $password_lama = md5($this->input->post('password_lama'));

        $this->db->select('username, password');
        $this->db->from('admin');
        $this->db->where('username', $username)->where('password', $password_lama);
        $where = $this->db->get()->row();

        if ($where != null) {
            // Update password
            $this->db->where('username', $username);
            $this->db->update('admin', $password_baru);

            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Password berhasil diubah!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        ');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password lama salah!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        ');
        }

        redirect('admin/dashboard');
    }
}
