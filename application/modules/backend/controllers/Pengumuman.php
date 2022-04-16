<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'pengumuman';

		$config['upload_path']          = 'public/pengumuman';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 10000; // maks 10mb
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
	}

	public function index()
	{	
        if(isset($GLOBALS['auth'])){
			$data['data'] = $this->umum->get_data($this->table);
			
			$data['button'] = '<a href="'.backend_url('pengumuman/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah</a>';
			$data['subtitle'] = 'Berisi link video yang akan ditampilkan di halaman <a href="'.base_url('pengumuman').'" target="_blank">Pengumuman</a>';
			$data['content'] = 'pengumuman/index';
			$this->load($data);
        }else{
            redirect(backend_url('auth'));
        }
	}

	public function add()
	{	
		$data['content'] = 'pengumuman/add';
		$this->load($data);
	}

	public function edit()
	{	
		$id = $this->urlcrypt->decode($this->uri->segment(4));
		$data['data'] = $this->umum->get_row($this->table,['id' => $id]);

		// if(!$data['data']) redirect(backend_url('notfound'));
		if(!$data['data']) $data['content'] = '404';
		else $data['content'] = 'pengumuman/edit';
		
		$this->load($data);
	}

	public function addAction(){

        $config = array(
	        array(
	                'field' => 'tanggal',
	                'label' => 'Tanggal',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'judul',
	                'label' => 'Judul',
	                'rules' => 'required'
	        ),
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
	        $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	        redirect(backend_url('pengumuman/add'));
        }

    	$data = array(
    	    'tanggal' 	=> $this->input->post('tanggal'),
    	    'judul' 	=> $this->input->post('judul'),
    	);

		if ($this->upload->do_upload('file')){
			$data['file'] = $this->upload->data()['file_name'];
		}

        $this->umum->add_dml($this->table,$data,false);
        $this->session->set_flashdata('success_message', 'Data berhasil disimpan!');
        redirect(backend_url('pengumuman/add'));
	}

	public function editAction(){

		$sid 	= $this->input->post('id');
        $id 	= $this->urlcrypt->decode($sid);

        $config = array(
	        array(
	                'field' => 'tanggal',
	                'label' => 'Tanggal',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'judul',
	                'label' => 'Judul',
	                'rules' => 'required'
	        ),
		);

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
	        $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
	        redirect(backend_url('pengumuman/edit/'.$sid));
        }

		$old = $this->umum->get_row('pengumuman',['id' => $id],'file');

    	$data = array(
    	    'tanggal' 	=> $this->input->post('tanggal'),
    	    'judul' 	=> $this->input->post('judul'),
    	);

		if ($this->upload->do_upload('file')){
			$file = $this->upload->data();
			if($file['file_name'] == $old['file']) $data['file'] = $old['file'];
			else $data['file'] = $file['file_name'];
		}

        $this->umum->edit_dml($this->table,$data,['id' => $id],false);
        $this->session->set_flashdata('success_message', 'Data berhasil dirubah!');
        redirect(backend_url('pengumuman/edit/'.$sid));
	}

	public function deleteAction(){

		$sid 	= $this->input->post('id');
		$id 	= $this->urlcrypt->decode($sid);

		$old 	= $this->umum->get_row('pengumuman',['id' => $id],'file');
		if(isset($old['file'])) unlink(FCPATH."/public/pengumuman/".$old['file']);

        $this->umum->del_dml($this->table,['id' => $id]);
        $this->session->set_flashdata('success_message', 'Data berhasil dihapus!');
        redirect(backend_url($this->router->fetch_class()));
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */