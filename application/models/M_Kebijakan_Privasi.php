<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kebijakan_Privasi extends CI_Model {

	public function kebijakan_privasi()
	{
		return $this->db->get('kebijakan_privasi')->row_array();
	}

	public function syarat_dan_ketentuan()
	{
		return $this->db->get('syarat_ketentuan')->row_array();
	}

	public function update()
	{
		$kebijakan=$this->input->post('kebijakan');

		$rules=[
			rules_array('kebijakan','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'content'=>$kebijakan,
		];

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'update',
				'message'=>'error',
				'title'=>'Edit Section Kontak Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect(admin_url('kebijakan_privasi'));
		} else {
			$this->db->where('id',1);
			$this->db->update('kebijakan_privasi',$data);
			$toast=[
				'request'=>'update',
				'message'=>'success',
				'title'=>'Edit Section Kontak Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect(admin_url('kebijakan_privasi'));
		}
	}
	public function edit_syarat()
	{
		$syarat=$this->input->post('syarat');

		$rules=[
			rules_array('syarat','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'content'=>$syarat,
		];

		if ($validasi->run()==false) {
			$toast=[
				'request'=>'update',
				'message'=>'error',
				'title'=>'Edit Section Kontak Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect(admin_url('kebijakan_privasi'));
		} else {
			$this->db->where('id',1);
			$this->db->update('syarat_ketentuan',$data);
			$toast=[
				'request'=>'update',
				'message'=>'success',
				'title'=>'Edit Section Kontak Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect(admin_url('kebijakan_privasi'));
		}
	}
}