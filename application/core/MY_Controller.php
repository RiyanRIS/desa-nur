<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_index');

		// GLOBAL DATA
        $GLOBALS['auth'] = $this->session->userdata('login_token');

		$GLOBALS['form_tambah'] = base_url().this_module(1).'Action';
		$GLOBALS['form_edit'] = base_url().this_module(1).'Action';
        $GLOBALS['img_path'] = base_url('assets/img/');

        $GLOBALS['icon']	= $this->umum->getSetting(['type' => 'icon']);
        $GLOBALS['logo']	= $this->umum->getSetting(['type' => 'logo']);
        $GLOBALS['title']	= $this->umum->getSetting(['type' => 'title']);

		// List Table
		$this->table_account	= 'account';
		$this->table_pengunjung	= 'pengunjung';
		$this->table_kegiatan	= 'jadwal_kegiatan';
		$this->table_setting	= 'settings';
		$this->table_groups		= 'groups';

        // Get User Data
        $GLOBALS['user'] = $this->umum->get_row($this->table_account,array('id' => jwt($GLOBALS['auth'],0)));

		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		$this->ckeditor->basePath = base_url().'assets/backend/ckeditor/';
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor->config['width'] = '600px';
		$this->ckeditor->config['height'] = '300px';    
		
		if($this->uri->segment(3) != 'edit') $this->ckfinder->SetupCKEditor($this->ckeditor, '../../assets/backend/ckfinder/');
		else $this->ckfinder->SetupCKEditor($this->ckeditor, '../../../assets/backend/ckfinder/');         
	}

	public function deleteAction(){

        $where = array(
            'id' => $this->urlcrypt->decode($this->input->post('id')),
        );

        $this->umum->del_dml($this->table,$where);
        $this->session->set_flashdata('success_message', 'Data berhasil dihapus!');
        redirect(backend_url($this->router->fetch_class()));
	}

	function load($data){
		$this->load->view('back_view',$data);
	}

	function view($data){
		$this->load->view('front_view',$data);
	}

	function err404(){
		$data['content'] = '404';
		$this->load($data);
	}

    function type($tipe){
        return $this->umum->get_row($this->table_setting,['type' => $tipe])['content'];
    }

}?>

