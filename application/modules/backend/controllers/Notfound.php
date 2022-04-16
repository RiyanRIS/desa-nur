<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notfound extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data['content'] = '404';
		$this->load($data);
	}

}

/* End of file Notfound.php */
/* Location: ./application/controllers/Notfound.php */