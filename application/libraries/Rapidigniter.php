<?php if(!defined('BASEPATH')) exit('No script access allowed');

class Rapidigniter extends CI_Controller {
	
	
    public function __construct() {
        $this->CI =& get_instance();
		
	}
	
	public function generate($data){
		$this->_gen_sql();
		$this->_gen_model();
		$this->_gen_controller();
		$this->_gen_views();
	}
	
	private function _load_plugins(){
		
	}
	
	private function _include_files($file,$dir){
		
	}
	
	private function _gen_sql(){
	
	}
	
	private function _gen_model(){
	
	}
	
	private function _gen_views(){
	
	}
	
	private function _gen_controllers(){
	
	}
	
}