<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

        $this->data['setting'] = $this->umum->getSetting();
	}

	public function index(){
		$this->load->view('error.php',$this->data);
	}
}
