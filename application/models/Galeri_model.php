<?php

class Galeri_model extends CI_Model {

	public function semua()
    {
        return $this->db->get('galeri')->result_array();
    }
    public function allgaleri($limit, $start)
    {
        return $this->db->get('galeri', $limit, $start)->result_array();
    }
    public function semuagaleri()
    {
        return $this->db->get('galeri')->num_rows();
    }
}

