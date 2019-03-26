<?
/*Example of Shared Service*/

//showing service manager's default behavior
$userService1=$serviceManger->get('User\Service\UserService');
$userService2=$serviceManger->get('User\Service\UserService');


var_dump((spl_object_hash(userService1er)===spl_object_hash(userService2))); 
/*will return true when hash value of both the objects are compared*/
?>