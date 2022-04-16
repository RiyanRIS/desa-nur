<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->table = 'account';
	}

	public function index()
	{	
        if(isset($GLOBALS['auth'])){
            $this->edit();
        }else{
            redirect(backend_url('auth'));
        }
	}

	public function edit()
	{	
        $data['data'] = $this->umum->get_row($this->table,['id' => jwt($this->session->userdata('login_token'),0)]);
        $data['subtitle'] = 'Dibawah ini adalah detail dari data anda';
        $data['content'] = 'setting/profile';
        $this->load($data);
	}

	public function editAction(){

        $config = array(
            array(
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
            $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
            redirect(backend_url('profile'));
        }

        $old = $this->umum->get_row($this->table,['id' => jwt($this->session->userdata('login_token'),0)]);

        $data = array(
            'name'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'),
        );

        $this->umum->edit_dml($this->table,$data,['id' => $old['id']],false);
        $this->session->set_flashdata('success_message', 'Data berhasil dirubah!');
        redirect(backend_url('profile'));
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */