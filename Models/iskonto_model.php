<?php 



class iskonto_model extends model{

	function __construct(){
	
		parent::__construct();
	
	}
	
	
	function iskonto(){
	
	
	$sql = 'SELECT * FROM iskonto INNER JOIN urunler ON urunler.id = iskonto.urun_id';
	return R::getAll( $sql );

			
	
	}
	
		function urunler(){
	
			return R::getAll( 'SELECT * FROM urunler' );
	
	}
	
	

	

	function kaydet(){
	
		var_dump($_POST);
		

		$shop = R::dispense('iskonto');
		$shop->iskonto = $_POST['iskonto'];
		$shop->urun_id = $_POST['urun_id'];
		$id =  R::store($shop);

		Redirect::to('iskonto');
	
	}


}
	






?>