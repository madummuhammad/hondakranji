<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($referral='')
	{
		$data['home']=$this->M_Home->index();
		$data['about']=$this->M_Home->about();
		$data['section_wa_1']=$this->M_Website_Eng->section_wa_1();
		$data['section_wa_2']=$this->M_Website_Eng->section_wa_2();
		$data['section_wa_3']=$this->M_Website_Eng->section_wa_3();
		$data['mengapa_kami']=$this->M_Website_Eng->mengapa_kami();
		$data['portofolio']=$this->M_Home->portofolio();
		$data['contact']=$this->M_Home->kontak();
		$data['footer']=$this->M_Home->footer();
		$data['seo']=$this->M_Seo->index();
		$data['promosi']=$this->M_Promosi->index();
		$data['produk']=$this->M_Produk->index();
		$data['varian']=$this->M_Produk->varian();
		$this->load->view('website/v_home',$data);
	}
}
