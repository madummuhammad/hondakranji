<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mengapa_Kami extends CI_Model {

	public function create()
	{
		$judul=$this->input->post('judul');
		$icon=$this->input->post('icon');
		$content=$this->input->post('content');
		$bahasa=$this->input->post('_bahasa');

		$rules=[
			rules_array('judul','required'),
			rules_array('icon','required'),
			rules_array('content','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'judul'=>$judul,
			'icon'=>$icon,
			'content'=>$content,
		];
		if ($validasi->run()==false) {
			$toast=[
				'request'=>'layanan',
				'icon'=>'error',
				'title'=>'Tambah Section Layanan Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website/'.$bahasa);
		} else {
			$this->db->insert('mengapa_kami',$data);
			$toast=[
				'request'=>'layanan',
				'icon'=>'success',
				'title'=>'Tambah Section Mengapa Kami Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function update()
	{
		$judul=form('judul');
		$icon=form('icon');
		$content=form('content');
		$id=$this->input->post('id');

		$rules=[
			rules_array('judul','required'),
			rules_array('icon','required'),
			rules_array('content','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'judul'=>$judul,
			'icon'=>$icon,
			'content'=>$content,
		];
		if ($validasi->run()==false) {
			$toast=[
				'request'=>'layanan',
				'icon'=>'error',
				'title'=>'Edit Section Mengapa Kami Gagal'
			];
			$this->session->set_flashdata($toast);
			redirect('website/');
		} else {
			$this->db->where('id',$id);
			$this->db->update('mengapa_kami',$data);
			$toast=[
				'request'=>'layanan',
				'icon'=>'success',
				'title'=>'Edit Section Mengapa Kami Berhasil'
			];
			$this->session->set_flashdata($toast);
			redirect('website');
		}
	}

	public function delete()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$this->db->delete('mengapa_kami');
		$toast=[
			'request'=>'layanan',
			'icon'=>'warning',
			'title'=>'Hapus Section Mengapa Kami Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(base_url('website'));
	}
}