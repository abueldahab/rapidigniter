<?php if(!defined('BASEPATH')) exit('No script access allowed');

class Rapid extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->user = $this->session->userdata('user');
		check();
		//$this->output->enable_profiler(TRUE);
		
	}
	
	public function index(){
		$data['user'] = $this->user;
		$this->load->view('header',$data);
		$this->load->view('sidebar',$data);
		$this->load->view('main',$data);
	}
	
	public function aj_index(){
		if(is_ajax()){
			$post_data = $this->input->post('data');
			$data['user'] = $this->user;
			$data['view'] = $this->load->view('main',$data,true);
			echo json_encode($data);
		}
	}
	
	public function aj_get_menu(){
	
	
	}


}