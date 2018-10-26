<?php 



class kategoriler_model extends model{

	function __construct(){
	
		parent::__construct();
	
	}
	
	
	function kategoriler(){
	
			return R::getAll( 'SELECT * FROM kategoriler' );
	
	}
	
	function allkategoriler(){
	
	
		return R::getAll( 'SELECT * FROM kategoriler WHERE kategori_alt_id =0 or kategori_alt_id = 1' );
	
	
	}
	

	function kaydet(){
	
		var_dump($_POST);
		

		$shop = R::dispense('kategoriler');
		$shop->kategori_adi = $_POST['kategoriadi'];
		
		
		if(isset($_POST['altkategori'])){
		
			$shop->kategori_alt_id = $_POST['altkategori'];
		
		}else{
		
			$shop->kategori_alt_id ='1';
		
		}
		
		

		$id =  R::store($shop);

		
		
		Redirect::to('kategoriler');
	
	}


}
	






?>