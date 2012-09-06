<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class #Item_#_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();
		$this->table = '#item_#';
	}
	
	public function get($id = NULL,$limit = NULL,$offset = NULL){
		#pre_insert#
		if($id == NULL){
			$result = $this->db->get_where($this->table, array('id' => $id), $limit, $offset);
		}
		else {
			$result = $this->db->get_where($this->table, $limit, $offset);
		}
		#before_insert_return#
		return $result;
	}
	
	public function insert($data,$id = NULL){
		#pre_insert#
		if($id == NULL){
			$result = $this->db->insert($this->table, $data);
		}
		else {
			$this->db->where('id',$id);
			$result = $this->db->update($this->table, $data);
		}
		#before_insert_return#
		return $result;
	}
	
	public function delete($id){
		#pre_delete#
		$this->db->delete($this->table, array('id' => $id)); 
		#post_delete#
	}
	
	#custom_model_function#
}