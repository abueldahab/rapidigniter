<?php if(!defined('BASEPATH')) exit('No script access allowed');

class Login extends CI_Controller 
{
	
    public function __construct() 
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function do_login(){
		//Post Array ( [email] => zulfa@abc.com [password] => abcd ) 
		//echo md5($this->input->post('password'));
		if(count($this->input->post())>0)
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if 
			(
				$this->form_validation->run() && 
				$this->rapid_model->check_user_login($this->input->post('email'),$this->input->post('password'))
			)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$user = $this->rapid_model->get_users($email)->row_array();
				$this->session->set_userdata('user',$user);
				$this->session->set_userdata('logged_in',TRUE);
				redirect('/');
			}			
			set_alert('error','Authentication failed.','/login/do_login');
			redirect('/login');
		}
		redirect('/login');
	}
	
	public function do_register(){
		//Array ( [email] => zulfa@abc.com [new_password] => abcd [confirm_password] => abcd )
		if(count($this->input->post())>0)
		{		
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.username]');
			$this->form_validation->set_rules('new_password', 'Password', 'required|matches[confirm_password]');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
			if ($this->form_validation->run())
			{
				$insert_data = array('username'=>$this->input->post('email'),'password'=>md5($this->input->post('new_password')));
				if($this->rapid_model->insert_users($insert_data)>0)
				{
					redirect('/login');
				}
				set_alert('error','Failed To Insert Data.','/login/do_register');
			}
			else 
			{
				set_alert('error','Email Is Already On Our Database','/login/do_register');
			}
		}
		redirect('/login');
	}
	
	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect('/login');
	}
}