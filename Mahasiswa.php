<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function surel()	
	{
		$data['mahasiswa'] = $this->model_mhs->get_data();
		$this->load->view('mahasiswa', $data);
		
	}

	public function add ()
	{
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(
			'npm'		=> $npm,
			'nama'		=> $nama,
			'email'		=> $email,
		);

		$this->model_mhs->input_data($data, 'tbl_mhs');
		redirect('mahasiswa/surel');
	}

}
