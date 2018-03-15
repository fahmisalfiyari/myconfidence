<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oth extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header_view');
		$this->load->view('oth_view');
		$this->load->view('template/footer_view');
	}
}
