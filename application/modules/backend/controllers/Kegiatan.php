<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->table = 'jadwal_kegiatan';
	}

	public function index(){	
        if(isset($GLOBALS['auth'])){
			$data['data'] = $this->umum->get_data($this->table);
			
			$data['button'] = '<a href="'.backend_url('kegiatan/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah</a>';
			$data['subtitle'] = 'Berisi jadwal kegiatan pegawai kantor Desa Madaprama';
			$data['content'] = 'kegiatan/index';
			$this->load($data);
        }else{
            redirect(backend_url('auth'));
        }
	}

	public function add(){	
		$data['content'] = 'kegiatan/add';
		$this->load($data);
	}

	public function edit(){	
		$id = $this->urlcrypt->decode($this->uri->segment(4));
		$data['data'] = $this->umum->get_row($this->table,['id' => $id]);

		if(!$data['data']) $data['content'] = '404';
		else $data['content'] = 'kegiatan/edit';
		
		$this->load($data);
	}

	public function addAction(){
        $config = array(
	        array(
	                'field' => 'tanggal',
	                'label' => 'Tanggal Kegiatan',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'nama_kegiatan',
	                'label' => 'Nama Kegiatan',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'detail_kegiatan',
	                'label' => 'Detail Kegiatan',
	                'rules' => 'required'
	        ),
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
	        $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	        redirect(backend_url('kegiatan/add'));
        }

    	$data = array(
    		'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
    		'detail_kegiatan' 	=> $this->input->post('detail_kegiatan'),
    		'tanggal' 			=> $this->input->post('tanggal'),
    	);

        $this->umum->add_dml($this->table,$data,false);
        $this->session->set_flashdata('success_message', 'Data berhasil disimpan!');
        redirect(backend_url('kegiatan/add'));
	}

	public function editAction(){

        $config = array(
	        array(
	                'field' => 'tanggal',
	                'label' => 'Tanggal Kegiatan',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'nama_kegiatan',
	                'label' => 'Nama Kegiatan',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'detail_kegiatan',
	                'label' => 'Detail Kegiatan',
	                'rules' => 'required'
	        ),
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
	        $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	        redirect(backend_url('kegiatan/add'));
        }

        $where = array(
            'id' => $this->urlcrypt->decode($this->input->post('id')),
        );

    	$data = array(
    		'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
    		'detail_kegiatan' 	=> $this->input->post('detail_kegiatan'),
    		'tanggal' 			=> $this->input->post('tanggal'),
    	);

        $this->umum->edit_dml($this->table,$data,$where,false);
        $this->session->set_flashdata('success_message', 'Data berhasil dirubah!');
        redirect(backend_url('kegiatan/edit/'.$this->input->post('id')));
	}

}

/* End of file kegiatan.php */
/* Location: ./application/controllers/kegiatan.php */