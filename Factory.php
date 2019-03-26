<?php
/*Factories are used for any setup or DI for the object requested. Mostly used when the fetched object has dependencies that need to be resolved */

//Adding and retrieving a factory
$serviceManager->setFactory('userService' , function($serviceManager)){
	$logger=$serviceManager->get ('My\Logger') ;
	return new \User\Service\UserService ($logger) ;
}


//Fetching service
$userService = $serviceManager->get ('userService');
?>