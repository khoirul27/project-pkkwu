<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
			if($this->session->userdata('id_admin')==NULL){
				redirect('admin/auth');
			}
		}
	public function index()
	{
		$this->template->load('admin/template','admin/dashboard');
	}
}