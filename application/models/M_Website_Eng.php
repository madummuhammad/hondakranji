<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Website_Eng extends CI_Model {

	public function index()
	{
		$data=$this->db->get('home_eng')->result_array();
		return $data;
	}

	public function about()
	{
		$data=$this->db->get('about_eng')->result_array();
		return $data;
	}

	public function section_wa_1()
	{
		$data=$this->db->get('section-wa-1')->row_array();
		return $data;
	}

	public function section_wa_2()
	{
		$data=$this->db->get('section-wa-2')->row_array();
		return $data;
	}

	public function section_wa_3()
	{
		$data=$this->db->get('section-wa-3')->row_array();
		return $data;
	}

	public function mengapa_kami()
	{
		$data=$this->db->get('mengapa_kami')->result_array();
		return $data;
	}

	public function portofolio()
	{
		$data=$this->db->get('portofolio_eng')->result_array();
		return $data;
	}

	public function team()
	{
		$data=$this->db->get('team_eng')->result_array();
		return $data;
	}

	public function partner()
	{
		return $this->db->get('partner')->result_array();
	}

	public function kontak()
	{
		$this->db->where('id',1);
		$data=$this->db->get('contact_eng')->row_array();
		return $data;
	}

	public function footer()
	{
		$this->db->where('id',1);
		$data=$this->db->get('footer_eng')->row_array();
		return $data;
	}

	public function contact()
	{
		$this->db->where('id',1);
		return $this->db->get('contact')->row_array();
	}
}
