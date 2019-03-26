<?php
//Alias example

$serviceManager->setAlias('user_db_adapter', 'Zend\Db\Adapter\Adapter');
$dbAdapter= $serviceManager->get('user_db_adapter');

?>