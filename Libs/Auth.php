<?php
/**
 * 
 */
class Auth
{
    
    public static function CheckLogin()
    {
		
		if (session_status() == PHP_SESSION_DISABLED  ) {
    
			redirect::to('login');
		
		}else{
		
			@session_start();
			$logged = $_SESSION['LOGEN'];
			if ($logged == false) {
				session_destroy();
				redirect::to('login');
				exit;
			}
		}
    }
	
	

    
}