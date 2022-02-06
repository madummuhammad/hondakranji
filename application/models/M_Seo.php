<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Seo extends CI_Model {

	public function index()
	{
		$this->db->where('id',1);
		return $this->db->get('seo')->row_array();
	}

	public function update()
	{
		$id=1;
		$deskripsi=form('deskripsi');
		$keyword=form('keyword');
		$rules=[
			rules_array('deskripsi','required'),
			rules_array('keyword','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'deskripsi'=>$deskripsi,
			'keyword'=>$keyword
		];
		if ($validasi->run()==false) {
			$message=[
				'request'=>'update',
				'message'=>'gagal'
			];
			$this->session->set_flashdata($message);
			$data['seo']=$this->M_Seo->index();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_seo',$data);
		} else {
			$this->db->where('id',$id);
			$this->db->update('seo',$data);
			$message=[
				'request'=>'update',
				'message'=>'success'
			];
			$this->session->set_flashdata($message);
			redirect(admin_url('seo'));	
		}
	}

}
