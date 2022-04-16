<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()	
	{	
		$data['data']['kegiatans'] = $this->umum->get_data('jadwal_kegiatan');

		$data['content'] = 'kegiatan';
		$this->view($data);
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */