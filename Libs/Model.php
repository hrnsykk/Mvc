<?php 

class model{

	function __construct(){

		R::setup('mysql:host=localhost;dbname=turksemarkt', 'root', 'root');
		R::exec('SET NAMES utf8');
		R::debug(false);
		

	}
	
	function Link($text){
		
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
		return 'n-a';
		}

		return $text;
		
	}


}



?>