<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index()
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Seo->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Seo->create();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Seo->delete();
		} else {
			$data['seo']=$this->M_Seo->index();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_seo',$data);
		}
	}

	public function syarat_dan_ketentuan()
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Kebijakan_Privasi->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Kebijakan_Privasi->konfirmasi();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Kebijakan_Privasi->edit_syarat();
		} else {
			$data['syarat']=$this->M_Kebijakan_Privasi->syarat_dan_ketentuan();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_syarat_ketentuan',$data);
		}
	}

	public function kebijakan_privasi()
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Kebijakan_Privasi->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Kebijakan_Privasi->konfirmasi();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Kebijakan_Privasi->delete();
		} else {
			$data['kebijakan_privasi']=$this->M_Kebijakan_Privasi->kebijakan_privasi();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_kebijakan_privasi',$data);
		}

	}
}