<?php 


class index extends controller{


	function __construct(){
	
		parent::__construct();
		
		Auth::CheckLogin();
	
	
		$this->load->title = 'Admin Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index/index');
		$this->load->view('footer');
		
		
	}
	
	
	
	
	public function logout(){
	
	
	session::destroy();
	
	}

}




?>