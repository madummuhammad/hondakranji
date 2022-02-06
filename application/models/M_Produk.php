<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model {

	public function index()
	{
		$data=$this->db->get('produk')->result_array();
		return $data;
	}

	public function varian($id='')
	{
		$this->db->where('id_produk',$id);
		$this->db->join('produk','varian_produk.id_produk=produk.id');
		return $this->db->get('varian_produk')->result_array();
	}

	public function variasi()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id_produk',$id);
		$this->db->join('produk','varian_produk.id_produk=produk.id');
		return $this->db->get('varian_produk')->result_array();
	}

	public function create()
	{
		$path='./assets/img/logo/';
		$type='jpg|png|jpeg';
		$file_name='logo';
		$form_name='logo';

		$path2='./assets/img/product/';
		$type2='jpg|png|jpeg';
		$file_name2='product';

		$gambar=upload_gambar($path2,$type2,$file_name2);

		$logo=gambar_logo($path,$type,$file_name,$form_name);
		$nama_produk=form('nama_produk');
		$harga_mulai=form('harga_mulai');

		$rules=[
			rules_array('nama_produk','required'),
			rules_array('harga_mulai','required')
		];

		$validasi=$this->form_validation->set_rules(rules($rules));

		$data=[
			'judul'=>$nama_produk,
			'harga_mulai'=>$harga_mulai,
			'logo'=>$logo,
			'gambar'=>$gambar
		];
		if ($validasi->run()==false) {
			$message=[
				'request'=>'create',
				'message'=>'gagal'
			];
			$this->session->set_flashdata($message);
			$data['produk']=$this->M_Produk->index();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_produk',$data);
		} else {
			$message=[
				'request'=>'create',
				'message'=>'success'
			];
			$this->db->insert('produk',$data);
			$this->session->set_flashdata($message);
			redirect(admin_url('produk'));

		}
	}

	public function update()
	{
		$id=form('id');
		$path='./assets/img/logo/';
		$type='jpg|png|jpeg';
		$file_name='logo';
		$form_name='logo';

		$path2='./assets/img/product/';
		$type2='jpg|png|jpeg';
		$file_name2='product';

		$gambar=upload_gambar($path2,$type2,$file_name2);

		$logo=gambar_logo($path,$type,$file_name,$form_name);
		$nama_produk=form('nama_produk');
		$harga_mulai=form('harga_mulai');


		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('produk')->row_array();

		$rules=[
			rules_array('nama_produk','required'),
			rules_array('harga_mulai','required')
		];

		if ($gambar==NULL) {
			$data=[
				'judul'=>$nama_produk,
				'harga_mulai'=>$harga_mulai,
				'logo'=>$logo,
			];
			if ($gambar_lama['logo'] !== 'default.png') {
				unlink(FCPATH . 'assets/img/product/'.$gambar_lama['logo']);
			}
		}elseif ($logo==NULL) {
			$data=[
				'judul'=>$nama_produk,
				'harga_mulai'=>$harga_mulai,
				'gambar'=>$gambar
			];
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/img/product/'.$gambar_lama['gambar']);
			}
		}elseif ($gambar==NULL and $logo==NULL) {
			$data=[
				'judul'=>$nama_produk,
				'harga_mulai'=>$harga_mulai,
			];
		}else{
			$data=[
				'judul'=>$nama_produk,
				'harga_mulai'=>$harga_mulai,
				'logo'=>$logo,
				'gambar'=>$gambar
			];
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/img/product/'.$gambar_lama['gambar']);
				unlink(FCPATH . 'assets/img/product/'.$gambar_lama['logo']);
			}
		}

		$validasi=$this->form_validation->set_rules(rules($rules));
		if ($validasi->run()==false) {
			$message=[
				'request'=>'update',
				'message'=>'gagal'
			];
			$this->session->set_flashdata($message);
			$data['produk']=$this->M_Produk->index();
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar');
			$this->load->view('admin/v_produk',$data);
		} else {
			$this->db->where('id',$id);
			$this->db->update('produk',$data);
			$message=[
				'request'=>'update',
				'message'=>'success'
			];
			$this->session->set_flashdata($message);
			redirect(admin_url('produk'));
		}
	}


	public function delete()
	{
		$id=form('id');
		$message=[
			'request'=>'delete',
			'message'=>'success'
		];

		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('produk')->row_array();
		unlink(FCPATH . 'assets/img/product/'.$gambar_lama['gambar']);
		unlink(FCPATH . 'assets/img/product/'.$gambar_lama['logo']);
		$this->session->set_flashdata($message);
		$this->db->where('id',$id);
		$this->db->delete('produk');
		redirect(admin_url('produk'));
	}
}