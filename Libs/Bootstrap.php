<?PHP

class Bootstrap{

	public $_methodName = 'index';

	function __construct(){
	
		$this->GetURL();
		$this->LoadController();
		$this->LoadMethod();
	
	
	}
	
	function GetURL(){
	
		$this->url = isset($_GET['url']) ? $_GET['url'] : null;
		
		if($this->url!=null){
		
			$this->url = rtrim($this->url, '/');
			$this->url = explode('/', $this->url);
		
		}else{
		
			unset ($this->url);
		
		}
	}
	
	function LoadController(){
		
		if(isset($this->url[0])){
			$this->file = 'Controllers/' . $this->url[0] . '.php';
		
			if(file_exists($this->file)){
		
				require $this->file;
				$this->controller = new $this->url[0]();
				
				
				
		
			}else{
		
				redirect::to('pagenotfound');
		
			}
		}else{
		
			redirect::to('index');
		
		}
	}
	
	function LoadMethod(){
	
		if(isset($this->url[2])){
		
			$this->controller->{$this->url[1]}($this->url[2]);
		
		
		}else{
			
				if(isset($this->url[1])){
		
					$this->controller->{$this->url[1]}();
		
				}else{
					
					if(file_exists($this->file)){
						
						
						if(method_exists($this->controller, $this->_methodName)){
						
						$this->controller->index();
						
					}else{
						
						if(method_exists($this->controller, $this->_methodName)){
						
						$this->controller->index();
						
						}
						
					}
						
					}else{
						
						redirect::to('pagenotfound');
						
					}
					
						
				

				
				}
				
		}
		
	}
	

	


}



?>