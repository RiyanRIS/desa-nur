<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'pegawai';
		$this->jabatan = ['Kepala Desa', 'Sekretaris Desa', 'Kasi Pelayanan', 'Kasi Pemerintahan', 'Kasi Kersa', 'Kaur Perencanaan', 'Kaur Umum', 'Kaur Keuangan', 'Staff Keuangan', 'Staff Kasi Pemerintahan','Penjaga'];
	}

	public function index()
	{	
        if(isset($GLOBALS['auth'])){
			$data['data'] = $this->umum->get_data($this->table);
			
			$data['button'] = '<a href="'.backend_url('pegawai/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah</a>';
			$data['subtitle'] = 'Daftar pegawai di Desa Madaprama';
			$data['content'] = 'pegawai/index';
			$this->load($data);
        }else{
            redirect(backend_url('auth'));
        }
	}

	public function add()
	{	
		$data['jabatan'] = $this->jabatan;
		$data['content'] = 'pegawai/add';
		$this->load($data);
	}

	public function edit()
	{	
		$id = $this->urlcrypt->decode($this->uri->segment(4));
		$data['data'] = $this->umum->get_row($this->table,['id' => $id]);
		$data['jabatan'] = $this->jabatan;

		// if(!$data['data']) redirect(backend_url('notfound'));
		if(!$data['data']) $data['content'] = '404';
		else $data['content'] = 'pegawai/edit';
		
		$this->load($data);
	}

	public function addAction(){

        $config = array(
	        array(
	                'field' => 'nama',
	                'label' => 'Nama',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'jabatan',
	                'label' => 'Jabatan',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'alamat',
	                'label' => 'Alamat',
	                'rules' => 'required'
	        ),
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
	        $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	        redirect(backend_url('pegawai/add'));
        }

    	$data = array(
    		'nama' 		=> $this->input->post('nama'),
    		'jabatan' 	=> $this->input->post('jabatan'),
    		'alamat' 	=> $this->input->post('alamat'),
    	);

        $this->umum->add_dml($this->table,$data,false);
        $this->session->set_flashdata('success_message', 'Data berhasil disimpan!');
        redirect(backend_url('pegawai/add'));
	}

	public function editAction(){

		$sid 	= $this->input->post('id');
		$id 	= $this->urlcrypt->decode($sid);

        $config = array(
	        array(
	                'field' => 'nama',
	                'label' => 'Nama',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'jabatan',
	                'label' => 'Jabatan',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'alamat',
	                'label' => 'Alamat',
	                'rules' => 'required'
	        ),
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
	        $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	        redirect(backend_url('pegawai/edit/'.$sid));
        }

    	$data = array(
    		'nama' 		=> $this->input->post('nama'),
    		'jabatan' 	=> $this->input->post('jabatan'),
    		'alamat' 	=> $this->input->post('alamat'),
    	);

        $this->umum->edit_dml($this->table,$data,['id' => $id],false);
        $this->session->set_flashdata('success_message', 'Data berhasil dirubah!');
        redirect(backend_url('pegawai/edit/'.$sid));
	}

}

/* End of file pegawai.php */
/* Location: ./application/controllers/pegawai.php */