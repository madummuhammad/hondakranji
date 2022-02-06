<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index()
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Produk->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Produk->create();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Produk->delete();
		} else {
			$data['produk']=$this->M_Produk->index();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_produk',$data);
		}
	}
	public function variasi()
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Variasi->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Variasi->create();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Variasi->delete();
		} else {
			$data['variasi']=$this->M_Produk->variasi();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_variasi',$data);
		}
	}
}