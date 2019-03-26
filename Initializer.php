<?php
/*Inject a database adapter into the services that implement AdapterAwareInterface*/

$serviceManager->addInitializer (funtion($instance, $serviceManager){
	if ($instance instance of Zend\Db\Adapter\AdapterAwareInterface) {
		$instance->setDbAdapter($serviceManager->get('Zend\Db\Adapter\Adapter'));
	}
});



?>