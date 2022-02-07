<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

	public function index()
	{
		if (get_cookie('lang_is')=='in') {
			$data=$this->db->get('home_ind')->result_array();
			return $data;
		} else {
			$data=$this->db->get('home_eng')->result_array();
			return $data;
		}
	}

	public function about()
	{
		if (get_cookie('lang_is')=='in') {
			$data=$this->db->get('about_ind')->result_array();
			return $data;
		} else {
			$data=$this->db->get('about_eng')->result_array();
			return $data;
		}
	}

	public function service()
	{
		if (get_cookie('lang_is')=='in') {
			$data=$this->db->get('service_ind')->result_array();
			return $data;
		} else {
			$data=$this->db->get('service_eng')->result_array();
			return $data;
		}
	}

	public function portofolio()
	{
		if (get_cookie('lang_is')=='in') {
			$data=$this->db->get('portofolio_ind')->result_array();
			return $data;
		} else {
			$data=$this->db->get('portofolio_eng')->result_array();
			return $data;
		}
	}

	public function team()
	{
		if (get_cookie('lang_is')=='in') {
			$data=$this->db->get('team_ind')->result_array();
			return $data;
		} else {
			$data=$this->db->get('team_eng')->result_array();
			return $data;
		}
	}

	public function partner()
	{
		return $this->db->get('partner')->result_array();
	}

	public function kontak()
	{
		if (get_cookie('lang_is')=='in') {
			$this->db->where('id',1);
			$data=$this->db->get('contact_ind')->row_array();
			return $data;
		} else {
			$this->db->where('id',1);
			$data=$this->db->get('contact_eng')->row_array();
			return $data;
		}
	}

	public function footer()
	{
		if (get_cookie('lang_is')=='in') {
			$this->db->where('id',1);
			$data=$this->db->get('footer_ind')->row_array();
			return $data;
		} else {
			$this->db->where('id',1);
			$data=$this->db->get('footer_eng')->row_array();
			return $data;
		}
	}

	public function edit_index()
	{
		$path='./assets/img/main/';
		$type='jpg|png|jpeg';
		$file_name='main';
		$this->db->where('id',1);
		$gambar_lama=$this->db->get('home_eng')->row_array();

		$judul=$this->input->post('judul');
		$content=$this->input->post('content');
		$bahasa=$this->input->post('_bahasa');
		$gambar=upload_gambar($path, $type, $file_name);

		$rules=[
			rules_array('judul','required'),
			rules_array('content','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		if ($gambar==NULL) {
			$data=[
				'judul'=>$judul,
				'content'=>$content,
			];
		} else {
			$data=[
				'judul'=>$judul,
				'content'=>$content,
				'gambar'=>$gambar
			];
		}

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'banner',
				'icon'=>'error',
				'title'=>'Edit Banner Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website/'.$bahasa);
		} else {
			$this->db->update('home_eng',$data);
			if ($gambar !== NULL) {
				unlink(FCPATH . 'assets/img/main/'.$gambar_lama['gambar']);
			}
			$toast=[
				'request'=>'banner',
				'icon'=>'success',
				'title'=>'Edit Banner Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function edit_section_wa_1()
	{
		$this->db->where('id',1);
		$judul=$this->input->post('judul');
		$button=$this->input->post('button');
		$wa=$this->input->post('wa');

		$rules=[
			rules_array('judul','required'),
			rules_array('button','required'),
			rules_array('wa','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'judul'=>$judul,
			'button'=>$button,
			'wa'=>$wa
		];

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'banner',
				'icon'=>'error',
				'title'=>'Edit Section Wa 1 Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website/'.$bahasa);
		} else {
			$this->db->where('id',1);
			$this->db->update('section-wa-1',$data);
			$toast=[
				'request'=>'banner',
				'icon'=>'success',
				'title'=>'Edit Section Wa 1 Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function edit_section_wa_2()
	{
		$judul=$this->input->post('judul');
		$tagline=form('tagline');
		$button=$this->input->post('button');
		$wa=$this->input->post('wa');

		$rules=[
			rules_array('judul','required'),
			rules_array('button','required'),
			rules_array('tagline','required'),
			rules_array('wa','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'judul'=>$judul,
			'tagline'=>$tagline,
			'button'=>$button,
			'wa'=>$wa
		];

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'banner',
				'icon'=>'error',
				'title'=>'Edit Section Wa 2 Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		} else {
			$this->db->where('id',1);
			$this->db->update('section-wa-2',$data);
			$toast=[
				'request'=>'banner',
				'icon'=>'success',
				'title'=>'Edit Section Wa 2 Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function edit_section_wa_3()
	{
		$this->db->where('id',1);
		$judul=$this->input->post('judul');
		$button=$this->input->post('button');
		$wa=$this->input->post('wa');

		$rules=[
			rules_array('judul','required'),
			rules_array('button','required'),
			rules_array('wa','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'judul'=>$judul,
			'button'=>$button,
			'wa'=>$wa
		];

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'banner',
				'icon'=>'error',
				'title'=>'Edit Section Wa 3 Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website/'.$bahasa);
		} else {
			$this->db->where('id',1);
			$this->db->update('section-wa-3',$data);
			$toast=[
				'request'=>'banner',
				'icon'=>'success',
				'title'=>'Edit Section Wa 3 Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function contact()
	{
		$alamat=form('alamat');
		$telepon=form('telepon');
		$pos=form('pos');
		$email=form('email');
		$hari=form('hari');
		$jam=form('jam');

		$rules=[
			rules_array('alamat','required'),
			rules_array('telepon','required'),
			rules_array('pos','required'),
			rules_array('email','required'),
			rules_array('hari','required'),
			rules_array('jam','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'pos'=>$pos,
			'email'=>$email,
			'hari'=>$hari,
			'jam'=>$jam
		];

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'banner',
				'icon'=>'error',
				'title'=>'Edit Section Kontak Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		} else {
			$this->db->where('id',1);
			$this->db->update('contact',$data);
			$toast=[
				'request'=>'banner',
				'icon'=>'success',
				'title'=>'Edit Section Kontak Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function edit_about()
	{
		$path='./assets/img/about/';
		$type='jpg|png|jpeg';
		$file_name='about';
		$this->db->where('id',1);
		$gambar_lama=$this->db->get('about_eng')->row_array();

		$judul=$this->input->post('judul');
		$content=$this->input->post('content');
		$gambar=upload_gambar($path, $type, $file_name);

		$rules=[
			rules_array('judul','required'),
			rules_array('content','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		if ($gambar==NULL) {
			$data=[
				'judul'=>$judul,
				'content'=>$content,
			];
		} else {
			$data=[
				'judul'=>$judul,
				'content'=>$content,
				'gambar'=>$gambar
			];
		}

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'about',
				'icon'=>'error',
				'title'=>'Edit Section About Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		} else {
			$this->db->update('about_eng',$data);
			if ($gambar !== NULL) {
				unlink(FCPATH . 'assets/img/about/'.$gambar_lama['gambar']);
			}
			$toast=[
				'request'=>'about',
				'icon'=>'success',
				'title'=>'Edit Section About Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

}
