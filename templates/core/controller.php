<?php if(!defined('BASEPATH')) exit('No script access allowed');

class #Item_# extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('#item_#_model');
		#post_construct#
		$this->manage();
	}
	
	public function manage() {
		#pre_manage#
		$data = $this->#item_#_model->get();
		#pre_manage_load_view#
		$vars['view']['form_data']=$data;
		$this->load->view('views/forms/#item_#/manage',$vars);
		#post_manage#
	}
	
	public function details() {
		#pre_details#
		$id = $this->uri->segment('3');
		$data = $this->#item_#_model->get($id)->row();
		$vars['view']['form_data'] = $data;
		$vars['view']['context'] = 'details';
		#pre_details_load_view#
		$this->load->view('views/forms/#item_#/add',$vars);
		#post_details#
	}
	
	public function add() {
		#pre_add_check_post#
		if($this->input->post()){
			#pre_add_post_data#
			$post_data = $this->input->post();
			#pre_add_insert#
			$this->#item_#_model->insert($post_data);
			if($this->db->affected_rows()){
				$this->session->set_flashdata('success', 'New '.ucwords('#item#').' Added Successfully');
			else {
				$this->session->set_flashdata('warning', 'Failed To Add New '.ucwords('#item#').'.');
			}
			#post_add_post#
			redirect('/#item_#');
		}
		$vars['view']['context'] = 'add';
		#pre_add_load_view#
		$this->load->view('views/forms/#item_#/add',$vars);
		#post_add#
	}
	
	public function update() {
		#pre_update_check_post#
		$id = $this->uri->segment('3');
		$this->#item_#_model->get($id);
		if($this->input->post() && $id == $this->input->post('id')){
			#pre_update_post_data#
			$post_data = $this->input->post();
			#pre_update_update#
			$this->#item_#_model->insert($post_data,$this->input->post->id);
			if($this->db->affected_rows()){
				$this->session->set_flashdata('success', ucwords('#item#').' Updated Successfully');
			else {
				$this->session->set_flashdata('warning', 'Failed To Update '.ucwords('#item#').'.');
			}
			#post_update_post#
			redirect('/#item_#');
		}
		$vars['view']['form_data'] = $data;
		$vars['view']['context'] = 'update';
		#pre_update_load_view#
		$this->load->view('views/forms/#item_#/add',$vars);
		#post_update#
	}
	
	public function delete() {
		#pre_delete#
		$id = $this->uri->segment('3');
		#pre_delete_delete#
		$this->#item_#_model->delete($id);
		if($this->db->affected_rows()){
			$this->session->set_flashdata('success', ucwords('#item#').' Updated Successfully');
		}
		else {
			$this->session->set_flashdata('warning', 'Failed To Delete '.ucwords('#item#').'.');
		}
		redirect('/#item_#');
		#post_delete#
	}
	
	#custom_controller_function#
}
	