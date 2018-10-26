<?php 


class urunler extends controller{


		function __construct(){
		
			parent::__construct();
			
					$this->model = $this->load->model('urunler');
		
		
		}
		
		
	function index(){
	
	$data = $this->model->urunler();
		
		$this->load->title = 'Ürünler Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('urunler/index', $data);
		$this->load->view('footer');
	
	}
	
	function ekle(){
	
	
	$data[] = $this->model->kategoriler();
	$data[] = $this->model->markalar();
	
	
		$this->load->title = 'Ürün Ekle Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('urunler/ekle', $data);
		$this->load->view('footer');
		
	
	
	}
	
	
	function duzenle($id){
	
	
	$data[] = $this->model->duzenle($id);
		$data[] = $this->model->kategoriler();
	$data[] = $this->model->markalar();

	
	
		$this->load->title = 'Ürün Düzenle Sayfası';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('urunler/duzenle', $data);
		$this->load->view('footer');
		
	
	
	}
	
	function kaydet(){
	

	
		$this->model->kaydet();
	
	
	}
	
	function sil($id){
	
	
		$this->model->sil($id);
	
	}
	
	function guncelle(){
	
	
	$this->model->guncelle();
	
	
	}


}