<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		if(isset($GLOBALS['auth'])){
			$this->dashboard();
		}else{
			redirect(backend_url('auth'));
		} 
	}

	public function dashboard()
	{	
		$data['total_pengumuman'] = $this->umum->get_total('pengumuman');
		$data['total_pengunjung'] = $this->umum->get_total('pengunjung');

		$data['subtitle'] = 'Dibawah ini adalah total data konten';
		$data['content'] = 'index';
		$this->load($data);
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */