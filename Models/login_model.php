<?php 


class login_model extends model{


	public function __construct(){
	
		parent::__construct();
		
	}
	
	
	public function logincheck(){
	
	if($_POST){
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		$usernamesay = R::count("users", "username like ?", [$username]);
		
		if($usernamesay == 1){
		
		
			$passwordsay = R::count("users", "password like ?", [$password]);
			
			
				if($passwordsay==1){
				
									/*LOGIN BASARILI*/
									
							$data = R::getAll( 'SELECT * FROM users WHERE username = :username',
									
									[':username' => $username]
							);
									
									
									
									
									
									
									@session_start();
									session::set('LOGEN', TRUE);
									session::set('USERNAME', $data[0]['username']);
									redirect::to('index');
				
				
				}else{
				
				
					echo 'password is wrong';
				
				}
		
		}else{
		
		
			echo 'user not found.';
		
		};
		
		


	
	
	}
	}

}

?>