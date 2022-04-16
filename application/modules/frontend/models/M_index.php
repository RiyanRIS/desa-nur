<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_index extends CI_Model {

	// Cek Limit
	function limit($user){
		$where = array(
			'cookies' => $user,
			'DATE_ADD(tanggal, INTERVAL 1 MINUTE) >=' => date('Y-m-d H:i:s'),
		);
		$this->db->where($where);
		return $this->db->get('pengunjung')->num_rows();
	}
}

/* End of file M_index.php */
/* Location: ./application/models/M_index.php */