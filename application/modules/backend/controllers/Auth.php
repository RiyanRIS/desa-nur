<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        if(isset($GLOBALS['auth'])){
            redirect(backend_url());
        }else{
            $data['login'] = true;
            $this->load($data);
        }
	}

    // Login Action
    public function loginAction(){

        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        if(strlen($email) == 0 || strlen($password) == 0){
            $data['response'] = 'false';
            $data['result'] = 'Isikan email & password dahulu!';
        }else{
            $where = array(
                'email' => $email,
                'password' => jdv_encrypt($password),
            );

            $cek = $this->umum->get_total($this->table_account,$where);
            $get = $this->umum->get_row($this->table_account,$where);

            if($cek > 0){
                $data_session = array(
                    'login_token' => jwt($get['id']),
                );
                $this->session->set_userdata($data_session);

                $data['response'] = 'true';
                $data['result'] = backend_url();
            }else{
                $data['response'] = 'false';
                $data['result'] = 'Email atau Password salah!';
            }
        }

        echo json_encode($data);
    }

    // Logout Action
    public function logoutAction(){

        $this->session->unset_userdata('login_token');
        redirect(backend_url('auth'));
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */