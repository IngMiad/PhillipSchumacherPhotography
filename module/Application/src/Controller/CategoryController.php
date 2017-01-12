<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Helper;
use Zend\View;

class CategoryController extends AbstractActionController
{

    public function init() {

        $controllerName = $this->_request->getControllerName();
        $this->_helper->layout->setLayout('../module/Application/view/layout/layout_category');

    }

    public function indexAction()
    {
        /*$request_category_id = 1; //dummy => category

        if($request_category_id == 1){
            return $this->action('photographyAction', 'Category', 'application');
        }*/

        //$this->view->title = "Photography";
        return new ViewModel();
    }

    
    public function photographyAction()
    {
        //$layout = Zend_Layout::getMvcInstance();
        //$layout->setLayout('otherlayout');

        $this->layout('layout/layout_category');

       // $helper = $this->_helper->getHelper('Layout');
        //$layout = $helper->getLayoutInstance();
        //$this->setLayout('../../view/layout/layout_category.phtml');
        //$this->_helper->layout()->setLayout('../../view/layout/layout_category.phtml');

        //$layout = $this->layout()->setLayout('../../view/layout/layout_category');

        //$layout = $bootstrap->getResource('Layout');

    
    	//$this->view->title = "Photography";
    	return new ViewModel();
    }


    public function fineartAction()
    {

    	//$this->view->title = "Photography";
    	return new ViewModel();
    }


    public function illustrationsAction()
    {

    	//$this->view->title = "Photography";
    	return new ViewModel();
    }



    public function pictureAction()
    {
    	return new ViewModel();
    }

}
