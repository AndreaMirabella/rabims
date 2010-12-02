<?php
/**
 * @Author: Marco De Bortoli
 * @Date: Dec 1, 2010
 * @Time: 7:27:47 PM
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initTranslation()
    {
        
    }

    protected function _initAutoLoad()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();

        $autoloader->registerNamespace(array('Rabi_'));

        $autoloader->suppressNotFoundWarnings(false);

        return $autoloader;
    }
}
