<?php
/*
1.These are strings which contains fully qualified class names including namspace
2. When requesting an invokable, the service manager instantiates the class and returns the object*/

//Adding invokable to the service manager
$serviceManager->setInvokableClass('userService' , 'User\Service\UserService') ; 

//Retrieving a service
$userService=$serviceManager->get('userService');

//How service manager comprehends
$classname contains 'User\Service\UserService'
return new $classname();
?>