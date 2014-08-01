<?php
class comment extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("form_validation");
		$this->load->model("comment_model");
		session_start();
	}
	
	public function insertComment(){
		$data = array();
		
		if ($this->input->post('btnok')){
			echo "sdfsdfsdfs";
			$this->form_validation->set_rules('name','name', 'required|alpha_numeric|min_length[6]');
			$this->form_validation->set_rules('email','email', 'required|valid_email');

		
			$this->form_validation->set_message("required","%s không được bỏ trống");
			$this->form_validation->set_message("alpha_numeric","%s chỉ được chứa chữ cái và số");
			$this->form_validation->set_message("valid_email","%s không đúng định dạng");
			$this->form_validation->set_error_delimiters("<span class='error'>","</span>");
			if($this->form_validation->run()){
				echo  "SDfsdfsdf";
				$data = array(
						'com_author'            => $this->input->post('name'),
						'com_email'        => $this->input->post('email'),
						'com_content'         => $this->input->post('usr_address'),
						'com_score' => 0,
						'com_status' => 0,
						'pro_id' => $this->uri->segment(4)
				); // end array
		
				$this->comment_model->insert($data);
			} // end from_validation->run()
		
		} // end isset btnok
		
	}
}