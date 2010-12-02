<?php

class Site_ChiSiamoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        //$this->_helper->layout()->setLayout('2col_content_left');
    }

    public function indexAction()
    {
        // action body
		$this->view->headTitle()->prepend('Chi siamo');
		$this->view->title = 'Chi siamo';
		$this->view->path = ' &raquo; Chi siamo';
    }
}

