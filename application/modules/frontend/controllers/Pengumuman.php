<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()	
	{	
        $data['data'] = array(
            'pengumuman' => $this->type('pengumuman'),
        );
		$data['video'] = $this->umum->get_data('pengumuman');

		$data['content'] = 'pengumuman';
		$this->view($data);
	}

	public function detail()	
	{	
		$id = $this->uri->segment(3);
		$data['data']['pengumuman'] = $this->umum->get_row('pengumuman',['id' => $id]);

		$data['content'] = 'detail_pengumuman';
		$this->view($data);
	}


}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */