<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ds extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header_view');
		$this->load->view('ds_view');
		$this->load->view('template/footer_view');
	}
}
