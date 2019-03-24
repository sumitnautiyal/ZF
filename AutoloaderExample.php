<?php
/*This is a classic example of standard autoloader in zf
This method exists within the module class of our module*/

public function getAutoloaderConfig()
{
	return array('Zend\Loader\StandardAutoloader' => array('namespaces'  => array(_NAMESPACE_ => _DIR_ . '/src/' . _NAMESPACE ) ) );
}
?>