<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'jabatan';
	}

	public function index()
	{	
        if(isset($GLOBALS['auth'])){
					$data['data'] = $this->umum->get_data($this->table);
			
					$data['button'] = '<a href="'.backend_url('jabatan/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah</a>';
					$data['subtitle'] = 'Daftar jabatan di Desa Madaprama';
					$data['content'] = 'jabatan/index';
					$this->load($data);
						}else{
								redirect(backend_url('auth'));
						}
	}

	public function add()
	{	
		$data['content'] = 'jabatan/add';
		$this->load($data);
	}

	public function edit()
	{	
		$id = $this->urlcrypt->decode($this->uri->segment(4));
		$data['data'] = $this->umum->get_row($this->table,['id' => $id]);

		// if(!$data['data']) redirect(backend_url('notfound'));
		if(!$data['data']) $data['content'] = '404';
		else $data['content'] = 'jabatan/edit';
		
		$this->load($data);
	}

	public function addAction(){

    //     $config = array(
	  //       array(
	  //               'field' => 'tanggal',
	  //               'label' => 'Tanggal',
	  //               'rules' => 'required'
	  //       ),
	  //       array(
	  //               'field' => 'judul',
	  //               'label' => 'Judul',
	  //               'rules' => 'required'
	  //       ),
		// );

		// $this->form_validation->set_rules($config);

        // if ($this->form_validation->run() == FALSE){ 
	      //   $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	      //   redirect(backend_url('pengumuman/add'));
        // }

    	$data = array(
    	    'nama' 	=> $this->input->post('nama'),
    	    'tugas' 	=> $this->input->post('tugas'),
    	);

        $this->umum->add_dml($this->table,$data,false);
        $this->session->set_flashdata('success_message', 'Data berhasil disimpan!');
        redirect(backend_url('jabatan/add'));
	}

	public function editAction(){

		$sid 	= $this->input->post('id');
        $id 	= $this->urlcrypt->decode($sid);

		$old = $this->umum->get_row('pengumuman',['id' => $id],'file');

		$data = array(
			'nama' 	=> $this->input->post('nama'),
			'tugas' 	=> $this->input->post('tugas'),
		);

		$this->umum->edit_dml($this->table,$data,['id' => $id],false);
		$this->session->set_flashdata('success_message', 'Data berhasil dirubah!');
		redirect(backend_url('jabatan/edit/'.$sid));
	}

	public function deleteAction(){

		$sid 	= $this->input->post('id');
		$id 	= $this->urlcrypt->decode($sid);

        $this->umum->del_dml($this->table,['id' => $id]);
        $this->session->set_flashdata('success_message', 'Data berhasil dihapus!');
        redirect(backend_url($this->router->fetch_class()));
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */