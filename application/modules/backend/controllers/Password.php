<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Password extends MY_Controller {

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
        $data['subtitle'] = 'Untuk ganti password silahkan masukkan <small>password_lama</small> terlebih dahulu';
        $data['content'] = 'setting/password';
        $this->load($data);
	}

	public function editAction(){

        $config = array(
            array(
                    'field' => 'old_password',
                    'label' => 'Password Lama',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'new_password',
                    'label' => 'Password Baru',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'confirm_password',
                    'label' => 'Konfirmasi Password',
                    'rules' => 'required|matches[new_password]'
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){ 
            $this->session->set_flashdata('error_message', 'Data gagal disimpan!');
            redirect(backend_url('password'));
        }

        $old = $this->umum->get_row($this->table,['id' => jwt($this->session->userdata('login_token'),0)]);

        $this->umum->edit_dml($this->table,['password' => jdv_encrypt($post['new_password'])],['id' => $old['id']],false);
        $this->session->set_flashdata('success_message', 'Data berhasil dirubah!');
        redirect(backend_url('password'));
	}
}

/* End of file Password.php */
/* Location: ./application/controllers/Password.php */