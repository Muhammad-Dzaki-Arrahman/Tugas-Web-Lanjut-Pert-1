<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends CI_Controller {

	public function index()
	{
		$this->load->view('about');
	}
	public function yahoo()
	{
		$this->load->view('templates/header');
	}
	public function test()
	{
		$this->load->view('templating');
	}
}
