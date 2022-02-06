<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index()
	{
		$data['home']=$this->M_Website_Eng->index();
		$data['about']=$this->M_Website_Eng->about();
		$data['section_wa_1']=$this->M_Website_Eng->section_wa_1();
		$data['section_wa_2']=$this->M_Website_Eng->section_wa_2();
		$data['section_wa_3']=$this->M_Website_Eng->section_wa_3();
		$data['mengapa_kami']=$this->M_Website_Eng->mengapa_kami();
		$data['portofolio']=$this->M_Website_Eng->portofolio();
		$data['contact']=$this->M_Website_Eng->kontak();
		$data['footer']=$this->M_Website_Eng->footer();
		$data['promosi']=$this->M_Promosi->index();
		$data['produk']=$this->M_Produk->index();
		$data['varian']=$this->M_Produk->varian();
		$this->load->view('admin/website/v_home',$data);
	}
}
