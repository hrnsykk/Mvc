<?php


class login extends controller{


	function __construct(){
	
		parent::__construct();
		
				$this->load->title = "Admin Login";
		
				$this->load->view('header');
				$this->load->view('login/index');
				$this->load->view('footer');
				
				$this->model = $this->load->model('login');
				
				
	
	}
	
	function check(){
	
		$this->model->logincheck();
		
	
	}

}


?>