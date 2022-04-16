<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    public function index(){
        if(isset($GLOBALS['auth'])){
            $this->page();
        }else{
            redirect(backend_url('auth'));
        }
    }

    public function page($tipe=''){

        $link =  [
            'home',
            'pengumuman',
            'contact',
        ];

        $data['data'] = array(
            'title' => $this->type('title'),
            'subtitle' => $this->type('subtitle'),
            'subtitle_desc' => $this->type('subtitle_desc'),
            'desc' => $this->type('desc'),
            'pengumuman' => $this->type('pengumuman'),
            'email' => $this->type('email'),
            'phone' => $this->type('phone'),
            'address' => $this->type('address'),
            'map' => $this->type('map'),
        );

        $data['content'] = in_array($tipe, $link) ? 'setting/'.$tipe : '404';
        $this->load($data);
    }

	public function editAction(){

        $post = $this->input->post();

        foreach($post as $key => $val){
            $where = ['type' => $key];
            $data = array(
                'content' => $val,
            );

            $this->umum->edit_dml($this->table_setting,$data,$where,false);
        }
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */