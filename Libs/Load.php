<?php 

	class load{
	
		function __construct(){
		
		
		
		}
		
		function view($file, $data = false){
		

		
			$file = 'Views/' . $file . '_view.php';
			
			require $file;
			
	
		}
		
		function view404($file, $data = false){
			
			
			$file = 'Views/' . $file . '_view.php';
			require $file;
			
	
		}
		
		function model($file){
		
			$ModelName = $file . '_model';
			require 'Models/' . $ModelName . '.php';
			return new $ModelName();
		
		
		}
		
		function helpers($file){
		
		
			require 'Helpers/' . $file . '.php';
		
		}

	
	
	}


?>