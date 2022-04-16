<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->user_cookie = (!empty($_COOKIE['d3sam4drapama']) ? $_COOKIE['d3sam4drapama']:$this->set_cookie());
	}

	public function index()
	{
        $data['data'] = array(
            'email' => $this->type('email'),
            'phone' => $this->type('phone'),
            'address' => $this->type('address'),
            'map' => $this->type('map'),
        );
		$data['content'] = 'contact';
		$this->view($data);
	}

	function sendMessage(){
		$ck = $this->M_index->limit($this->user_cookie);

		if($ck != 0){
			$e['result'] = 'false';
		}else{
			$data = array(
				'ip' => get_client_ip(),
				'cookies' => $this->user_cookie,
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'pesan' => $this->input->post('message'),
			);

			$postData = $this->umum->add_dml('pengunjung',$data,false);
			$e['result'] = 'true';
		}

		echo json_encode($e);
	}

	function set_cookie(){
		if(empty($this->user_cookie)){
			// Set cookie
			$this->user_cookie = array(
				'name'   => 'd3sam4drapama',
				'value'  => md5(sha1(md5($this->input->user_agent().get_client_ip()))),
				'expire' => '2147483647',
				);
			$this->input->set_cookie($this->user_cookie);
		}    
	}

	function get_cookie(){
		debug($this->user_cookie);
	}

	function delete_cookie(){
		if (isset($_SERVER['HTTP_COOKIE'])) {
			$this->user_cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($this->user_cookies as $this->user_cookie) {
				$parts = explode('=', $this->user_cookie);
				$name = trim($parts[0]);
				setcookie($name, '', time()-1000);
				setcookie($name, '', time()-1000, '/');
			}
		}
	}
	
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */