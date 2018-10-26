<?php 



class markalar_model extends model{

	function __construct(){
	
		parent::__construct();
	
	}
	
	
	function markalar(){
	
			return R::getAll( 'SELECT * FROM markalar' );
	
	}
	

	

	function kaydet(){
	
		var_dump($_POST);
		

		$shop = R::dispense('markalar');
		$shop->marka_adi = $_POST['markaadi'];

		$id =  R::store($shop);

		
		
		Redirect::to('markalar');
	
	}


}
	






?>