<?php
/*Overriding service manager's default behaviour*/

$serviceManager->setShared('User\Service\UserService', false);
$userService3=$serviceManager->get('User\Service\UserService');
var_dump((spl_object_hash($userService2)===spl_object_hash(userService3))); /*The output will be false*/
?>