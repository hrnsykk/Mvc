<?php 


class kategoriler extends controller{


	function __construct(){
	
		parent::__construct();
		
		Auth::CheckLogin();
	
	
		$this->model = $this->load->model('kategoriler');
		
		
	}
	
	function index(){
	
	$data = $this->model->kategoriler();
		
		$this->load->title = 'Kategoriler Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('kategoriler/index', $data);
		$this->load->view('footer');
	
	}
	
	function ekle(){
	

	

	$data = $this->model->allkategoriler();
	
			$this->load->title = 'Kategori Ekle Sayfası';
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('kategoriler/ekle', $data);
			$this->load->view('footer');
	
	}
	
	function kaydet(){

		
		
	
		$this->model->kaydet();
		
		
	
	
	}
	
	
	
	


}




?>