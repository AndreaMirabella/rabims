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
	
	protected function _initView()
    {
		$view = new Zend_View();

        $view->doctype('XHTML11');
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');
		
		$view->headTitle(' Rabi Multiservices - Web agency Genova, creazione siti internet, applicativi web e registrazione Caselle posta certificata ')
             ->setSeparator(' - ');
	}
}
