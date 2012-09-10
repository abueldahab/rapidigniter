<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function check(){
	$ci =& get_instance();
	if(!$ci->session->userdata('logged_in')){
		redirect('/login');
	}
}

function check_auth($controller_name,$method_name,$redirect = FALSE){
	$ci =& get_instance();
	
}

function set_auth($user_id,$controller_name,$method_name){
	$ci =& get_instance();

}


?>