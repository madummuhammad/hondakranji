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
		$data['contact']=$this->M_Website_Eng->contact();
		$this->load->view('website/v_home',$data);
	}

	public function kebijakan_privasi()
	{
		$data['footer']=$this->M_Home->footer();
		$data['seo']=$this->M_Seo->index();
		$data['kebijakan']=$this->M_Kebijakan_Privasi->kebijakan_privasi();
		$this->load->view('website/v_header',$data);
		$this->load->view('website/v_navbar');
		$this->load->view('website/v_kebijakan_privasi',$data);
		$this->load->view('website/v_footer');
	}

	public function syarat_dan_ketentuan()
	{
		$data['footer']=$this->M_Home->footer();
		$data['seo']=$this->M_Seo->index();
		$data['syarat']=$this->M_Kebijakan_Privasi->syarat_dan_ketentuan();
		$this->load->view('website/v_header',$data);
		$this->load->view('website/v_navbar');
		$this->load->view('website/v_syarat_ketentuan',$data);
		$this->load->view('website/v_footer');
	}

	public function email()
	{
		$nama=form('name');
		$email=form('email');
		$no_hp=form('no_hp');
		$subject=form('subject');
		$message=form('message');

		$htmlContent = '<h3>Hi, Saya:'.$nama.'</h3>';
		$htmlContent .= '<p>Email:'.$email.'</p><br>';
		$htmlContent .= '<p>No Hp:'.$no_hp.'</p><br>';
		$htmlContent .= '<p>Pesan:'.$message.'</p><br>';
		$htmlContent .= '<p>Terimakasih</p>';
		$config['mailtype'] = 'html';


		$this->email->initialize($config);
		$this->email->to('Rijal4355@gmail.com');
		$this->email->from('client@hondakranjibekasi.com','Client Message');
		$this->email->subject($subject);
		$this->email->message($htmlContent);
		$this->email->send();
	}
}
