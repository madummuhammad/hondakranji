<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($referral='')
	{
		if ($referral !== '') {
			$message=[
				'message'=>'gagal',
				'request'=>'registrasi'
			];

			$this->session->set_flashdata($message);
		}
		$data['referral']=$referral;
		$data['home']=$this->M_Home->index();
		$data['about']=$this->M_Home->about();
		$data['section_wa_1']=$this->M_Website_Eng->section_wa_1();
		$data['section_wa_2']=$this->M_Website_Eng->section_wa_2();
		$data['section_wa_3']=$this->M_Website_Eng->section_wa_3();
		$data['mengapa_kami']=$this->M_Website_Eng->mengapa_kami();
		$data['portofolio']=$this->M_Home->portofolio();
		$data['team']=$this->M_Home->team();
		$data['partner']=$this->M_Home->partner();
		$data['contact']=$this->M_Home->kontak();
		$data['footer']=$this->M_Home->footer();
		$this->load->view('website/v_home',$data);
	}
}
