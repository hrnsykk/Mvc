<?php 


class iskonto extends controller{


	function __construct(){
	
		parent::__construct();
		
		Auth::CheckLogin();
	
	
		$this->model = $this->load->model('iskonto');
		
		
	}
	
	function index(){
	
	$data = $this->model->iskonto();
		
		$this->load->title = 'Iskonto Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('iskonto/index', $data);
		$this->load->view('footer');
	
	}
	
	function ekle(){
	

	

	$data = $this->model->urunler();
	
			$this->load->title = 'İskonto Ekle Sayfası';
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('iskonto/ekle', $data);
			$this->load->view('footer');
	
	}
	
	function kaydet(){

		
		
	
		$this->model->kaydet();
		
		
	
	
	}
	
	
	
	


}




?>