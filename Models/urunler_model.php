<?php 



class urunler_model extends model{

	function __construct(){
	
		parent::__construct();
	
	}
	
	
	function urunler(){
	
			return R::getAll( 'SELECT * FROM urunler' );
	
	}
	function kategoriler(){
	
			return R::getAll( 'SELECT * FROM kategoriler' );
	
	}
	function markalar(){
	
			return R::getAll( 'SELECT * FROM markalar' );
	
	}
	

	

	function kaydet(){
	
	
	
	
		$shop = R::dispense('urunler');
		$shop->urun_adi = $_POST['urunadi'];
		$shop->urun_kategorisi = $_POST['kategoriler'];
		$shop->urun_fiyati = $_POST['urunfiyati'];
		$shop->urun_markasi = $_POST['marka'];
		$shop->urun_aciklamasi = $_POST['aciklama'];
		$shop->urun_birimi = $_POST['birim'];
		$shop->urun_durumu = $_POST['durum'];

		$urunid =  R::store($shop);

		
		
		

	
	
	
					// Count # of uploaded files in array
					$total = count($_FILES['resimler']['name']);

					// Loop through each file
					for( $i=0 ; $i < $total ; $i++ ) {

					//Get the temp file path
					$tmpFilePath = $_FILES['resimler']['tmp_name'][$i];



					//Make sure we have a file path
					if ($tmpFilePath != ""){
					//Setup our new file path
					$newFilePath = "assets/uploads/" . $_FILES['resimler']['name'][$i];

					//Upload the file into the temp dir
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {

					//Handle other code here
					
						$resim = R::dispense('fotograflar');
						$resim->fotograf_adi = $_FILES['resimler']['name'][$i];
						$resim->urun_id = $urunid ;
						
						R::store($resim);
					
					}
					}
					}

			Redirect::to('urunler');

	}
	
	
	public function sil($id){
	
			$urun = R::load('urunler',$id); 
			
			R::trash($urun);
			Redirect::to('urunler');
	
	}
	
	
	public function duzenle($id){
	
	
	return R::getAll( "SELECT * FROM urunler INNER JOIN fotograflar ON urunler.id = fotograflar.urun_id WHERE urunler.id = $id " );
	
	}
	
	
	public function guncelle(){
	
		$urunler = R::findOne( 'urunler', $_POST['id'] );
		
		
		
		
		$urunler->urun_adi = $_POST['urunadi'] ;
		$urunler->urun_fiyati = $_POST['urunfiyati'] ;
		$urunler->urun_kategorisi = $_POST['kategoriler'] ;
		$urunler->urun_markasi = $_POST['marka'] ;
		$urunler->urun_aciklamasi = $_POST['aciklama'] ;
		$urunler->urun_birimi = $_POST['birim'];
		$urunler->urun_durumu = $_POST['durum'];
	
		R::store( $urunler );
		Redirect::to('urunler');
	}


}
	






?>