<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Umum extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function validate($table,$data=array()){
		$this->db->where($data);
		return $this->db->get($table)->num_rows();
	}
	
	function getSetting($where){
		$this->db->where($where);
		return $this->db->get('settings')->row()->content;
	}

	function get_data($table,$filed_array=array(),$select='*',$joins=array()) {
		$this->db->select($select);
		if ($joins)foreach ($joins as $tble => $val) $this->db->join($tble, $val, 'left');
        if(count($filed_array)>0)
        	$query = $this->db->get_where($table, $filed_array);
        else
        	$query = $this->db->get($table);
        return $query -> result_array();
    }

	function get_total($table,$filed_array=array()){
        if(count($filed_array)>0)
        	$query = $this->db->get_where($table, $filed_array);
        else
        	$query = $this->db->get($table);
        return $query -> num_rows();
	}
	
	function get_row($table,$filed_array=array(),$select='*') {
		$this->db->select($select);
        if(count($filed_array)>0)
        	$query = $this->db->get_where($table, $filed_array);
        else
        	$query = $this->db->get($table);
		
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
		} else {
			$result = '';
		}
		return $result;
    }
    
	function add_dml($table,$data,$flas=true){
	   	$this->db->insert($table, $data);
		if ($flas) $this->session->set_flashdata('success_message', 'New record created successfully');
		return true; 
	}
    
    function edit_dml($table,$data,$field=array(),$flas=true){
        $this->db->where($field);
        $this->db->update($table, $data);
		if($flas) $this->session->set_flashdata('success_message', 'Record updated successfully');
		return true; 
    }
    
    function del_dml($table,$field=array(),$flas=true){
        $this->db->where($field);
        $this->db->delete($table);
		if($flas) $this->session->set_flashdata('success_message', 'Record deleted successfully');
        return true;
    }

		function query($sql)
		{
			$query = $this->db->query($sql);
			return $query->result_array();

		}

}
