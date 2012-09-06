<?php if(!defined('BASEPATH')) exit('No script access allowed');

class Rapid extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('uri');
		$this->load->library('table');
		$this->load->library('rapidigniter','r');
	}
	
	function index(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('main');
	}


}