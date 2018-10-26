<?php



require_once   '/Config.php'; 



require_once('Libs/RedBeanPHP.php');




function autoloader($classname){
    
	
	    if (is_file('Libs/'.$classname.'.php')) {
        require_once('Libs/'.$classname.'.php');

}
	
    
    
    
}

spl_autoload_register('autoloader');

$app = new Bootstrap();

?>