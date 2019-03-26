<?php

/*This is a classic example of autoload_classmap.php in zf
This method exists within the module class of our module*/

public function getAutoloaderConfig()
{
	return array ('Zend\Loader\ClassMapAutoloader' => array(_DIR_ . '/autoload_classmap.php' ,), ) ;
}

return array('MyModule\Controller\IndexController' => _DIR_ . '/src/MyModule/IndexController.php' , 'MyModule\Entity\User') => _DIR_ . '/src/MyModule/Entity/User.php' ' , 
	MyModule\Service\UserService') => _DIR_ . '/src/MyModule/Service/UserService.php' ' , );
?>