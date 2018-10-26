<?php 


class markalar extends controller{


		function __construct(){
		
			parent::__construct();
			
					$this->model = $this->load->model('markalar');
		
		
		}
		
		
	function index(){
	
	$data = $this->model->markalar();
		
		$this->load->title = 'Markalar Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('markalar/index', $data);
		$this->load->view('footer');
	
	}
	
	function ekle(){
	
	
		$this->load->title = 'Marka Ekle Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('markalar/ekle');
		$this->load->view('footer');
		
	
	
	}
	
	function kaydet(){
	
		
		$this->model->kaydet();
	
	}



}