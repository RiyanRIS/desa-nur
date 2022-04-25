<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Struktur extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()	
	{	
        $data['data'] = array(
						'pegawais' => $this->umum->query("SELECT a.*, b.nama nama_jabatan FROM `pegawai` a JOIN `jabatan` b ON a.jabatan = b.id"),
        );

		$data['content'] = 'struktur';
		$this->view($data);
	}

	public function detail_jabatan()	
	{	
		$id = $this->uri->segment(3);
		$data['data']['pegawais'] = $this->umum->query("SELECT a.*, b.nama nama_jabatan, b.tugas FROM `pegawai` a JOIN `jabatan` b ON a.jabatan = b.id WHERE a.id = '$id' ");

		$data['content'] = 'detail_jabatan';
		$this->view($data);
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */