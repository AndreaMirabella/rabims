<?php
/**
 * @author: Marco De Bortoli
 * @date: Dec 1, 2010
 * @package Site
 */
class Site_IndexController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$this->view->headTitle()->prepend('Home page');
		$this->view->title = 'Home page';
    }
}



