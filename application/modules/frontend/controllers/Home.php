<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
        $data['data'] = array(
						'pegawais' => $this->umum->get_data('pegawai'),
            'title' => $this->type('title'),
            'subtitle' => $this->type('subtitle'),
            'subtitle_desc' => $this->type('subtitle_desc'),
            'desc' => $this->type('desc'),
        );
		$data['video'] = $this->umum->get_data('pengumuman');
		
		$data['content'] = 'index';
		$this->view($data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */