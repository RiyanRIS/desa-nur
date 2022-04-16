<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengunjung extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->table = 'pengunjung';
	}

	public function index()
	{
        if(isset($GLOBALS['auth'])){
    		$data['subtitle'] = 'Berisi pesan dari pengunjung website melalui halaman kontak di url <a href="'.base_url("contact").'" target="_blank">Contact</a>';
    		$data['data'] = $this->umum->get_data($this->table);
    		$data['content'] = 'pengunjung/index';
    		$this->load($data);
        }else{
            redirect(backend_url('auth'));
        }
	}

	public function read($id=''){
        $e = $this->umum->edit_dml($this->table,['dibaca' => true],['id' => $this->urlcrypt->decode($id)],false);		
        if($e) redirect(backend_url('pengunjung'));
	}

}

/* End of file Pengunjung.php */
/* Location: ./application/controllers/Pengunjung.php */