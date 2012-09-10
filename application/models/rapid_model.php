<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rapid_model extends CI_Model {
	
	
	/** 
	* Get users data
	* 
	* @access public 
	* @param string $id, limit $offset
	* @return SQL Result Object
	*/
	public function get_users($id = NULL,$limit = NULL,$offset = NULL){
		$table="users";
		if($id != NULL && !is_int($id)){
			$result = $this->db->get_where($table, array('username' => $id));
		}
		else if ($id != NULL && is_int($id)){
			$result = $this->db->get_where($table, array('id' => $id));
		}
		else {
			$result = $this->db->get($table, $limit, $offset);
		}
		return $result;
	}
	
	/** 
	* Check users login credentials 
	* 
	* @access public 
	* @param string $username, string $password
	* @return TRUE|FALSE 
	*/
	public function check_user_login($username = NULL,$password){
		$table="users";
		if($username != NULL && $password != NULL){
			$result = $this->db->get_where($table, array('username' => $username,'password' => md5($password)))->result_array();
			if($result && count($result) > 0){
				return TRUE;
			}
		}
		return FALSE;
	}
	
	/** 
	* Insert Users into Users Table
	* 
	* @access public 
	* @param array $data, int $id
	* @return int 
	*/
	public function insert_users($data,$id = NULL)
	{
		$table="users";
		if($id == NULL)
		{
			$this->db->insert($table, $data);
			$result = $this->db->insert_id();
		}
		else 
		{
			$this->db->where('id',$id);
			$result = $this->db->update($table, $data);
		}
		return $result;
	}
	
	public function get_project($id = NULL,$limit = NULL,$offset = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->get_where($table, array('id' => $id), $limit, $offset);
		}
		else {
			$result = $this->db->get_where($table, $limit, $offset);
		}
		#before_insert_return#
		return $result;
	}
	
	public function insert_project($data,$id = NULL){
		$table="users";
		if($id == NULL){
			$result = $this->db->insert($table, $data);
		}
		else {
			$this->db->where('id',$id);
			$result = $this->db->update($table, $data);
		}
		#before_insert_return#
		return $result;
	}
	
	public function delete_project($id){
		$table="";
		$this->db->delete($table, array('id' => $id)); 
		#post_delete#
	}
	public function get_tables($id = NULL,$limit = NULL,$offset = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->get_where($table, array('id' => $id), $limit, $offset);
		}
		else {
			$result = $this->db->get_where($table, $limit, $offset);
		}
		#before_insert_return#
		return $result;
	}
	
	public function insert_tables($data,$id = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->insert($table, $data);
		}
		else {
			$this->db->where('id',$id);
			$result = $this->db->update($table, $data);
		}
		#before_insert_return#
		return $result;
	}
	
	public function delete_tables($id){
		$table="";
		$this->db->delete($table, array('id' => $id)); 
		#post_delete#
	}
	public function get_fields($id = NULL,$limit = NULL,$offset = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->get_where($table, array('id' => $id), $limit, $offset);
		}
		else {
			$result = $this->db->get_where($table, $limit, $offset);
		}
		#before_insert_return#
		return $result;
	}
	
	public function insert_fields($data,$id = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->insert($table, $data);
		}
		else {
			$this->db->where('id',$id);
			$result = $this->db->update($table, $data);
		}
		#before_insert_return#
		return $result;
	}
	
	public function delete_fields($id){
		$table="";
		$this->db->delete($table, array('id' => $id)); 
		#post_delete#
	}
	
	public function get_relationships($id = NULL,$limit = NULL,$offset = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->get_where($table, array('id' => $id), $limit, $offset);
		}
		else {
			$result = $this->db->get_where($table, $limit, $offset);
		}
		#before_insert_return#
		return $result;
	}
	
	public function insert_relationships($data,$id = NULL){
		$table="";
		if($id == NULL){
			$result = $this->db->insert($table, $data);
		}
		else {
			$this->db->where('id',$id);
			$result = $this->db->update($table, $data);
		}
		#before_insert_return#
		return $result;
	}
	
	public function delete_relationships($id){
		$table="";
		$this->db->delete($table, array('id' => $id)); 
		#post_delete#
	}
	
}