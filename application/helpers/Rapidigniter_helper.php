<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	function set_alert($type,$message,$context)
	{
		$ci =& get_instance();
		$alert = array(
			'message' => $message,
			'context' => $context, 
			'type' => $type);
		$ci->session->set_flashdata('alert',$alert);
	}
	
	function is_ajax() {
		return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest");
	}  

?>