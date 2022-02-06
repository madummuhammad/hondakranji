<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Variasi extends CI_Model {


	public function create()
	{
		$path2='./assets/img/product/';
		$type2='jpg|png|jpeg';
		$file_name2='variasi';

		$id_produk=$this->uri->segment(4);
		$gambar=upload_gambar($path2,$type2,$file_name2);

		$tipe=form('tipe');
		$harga=form('harga');
		$spesifikasi=form('spesifikasi');

		$rules=[
			rules_array('tipe','required'),
			rules_array('harga','required'),
			rules_array('spesifikasi','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'tipe'=>$tipe,
			'harga'=>$harga,
			'gambar_varian'=>$gambar,
			'id_produk'=>$id_produk,
			'spesifikasi'=>$spesifikasi
		];
		if ($validasi->run()==false) {
			$message=[
				'request'=>'create',
				'message'=>'gagal'
			];
			$this->session->set_flashdata($message);
			$data['variasi']=$this->M_Produk->variasi();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_variasi',$data);
		} else {
			$message=[
				'request'=>'create',
				'message'=>'success'
			];
			$this->db->insert('varian_produk',$data);
			$this->session->set_flashdata($message);
			redirect(admin_url('produk/variasi/'.$id_produk));

		}
	}

	public function update()
	{
		$path2='./assets/img/product/';
		$type2='jpg|png|jpeg';
		$file_name2='variasi';

		$id_produk=$this->uri->segment(4);
		$gambar=upload_gambar($path2,$type2,$file_name2);
		$id=form('id');

		$tipe=form('tipe');
		$harga=form('harga');
		$spesifikasi=form('spesifikasi');

		$rules=[
			rules_array('tipe','required'),
			rules_array('harga','required'),
			rules_array('spesifikasi','required')
		];


		$this->db->where('id_varian',$id);
		$gambar_lama=$this->db->get('varian_produk')->row_array();

		if ($gambar==NULL) {
			$data=[
				'tipe'=>$tipe,
				'harga'=>$harga,
				'id_produk'=>$id_produk,
				'spesifikasi'=>$spesifikasi
			];
			if ($gambar_lama['gambar_varian'] !== 'default.png') {
				unlink(FCPATH . 'assets/img/product/'.$gambar_lama['gambar_varian']);
			}
		}else{
			$data=[
				'tipe'=>$tipe,
				'harga'=>$harga,
				'gambar_varian'=>$gambar,
				'id_produk'=>$id_produk,
				'spesifikasi'=>$spesifikasi
			];
			if ($gambar_lama['gambar_varian'] !== 'default.png') {
				unlink(FCPATH . 'assets/img/product/'.$gambar_lama['gambar_varian']);
			}
		}

		$validasi=$this->form_validation->set_rules(rules($rules));
		if ($validasi->run()==false) {
			$message=[
				'request'=>'update',
				'message'=>'gagal'
			];
			$this->session->set_flashdata($message);
			$data['variasi']=$this->M_Produk->variasi();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_variasi',$data);
		} else {
			$this->db->where('id_varian',$id);
			$this->db->update('varian_produk',$data);
			$message=[
				'request'=>'update',
				'message'=>'success'
			];
			$this->session->set_flashdata($message);
			redirect(admin_url('produk/variasi/'.$id_produk));
		}
	}


	public function delete()
	{
		$id=form('id');
		$id_produk=$this->uri->segment(4);
		$message=[
			'request'=>'delete',
			'message'=>'success'
		];

		$this->db->where('id_varian',$id);
		$gambar_lama=$this->db->get('varian_produk')->row_array();
		unlink(FCPATH . 'assets/img/product/'.$gambar_lama['gambar_varian']);
		$this->session->set_flashdata($message);
		$this->db->where('id_varian',$id);
		$this->db->delete('varian_produk');
		redirect(admin_url('produk/variasi/'.$id_produk));
	}
}