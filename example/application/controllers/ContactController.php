<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ContactController.php
	
	@desc		This class controls the contact page

**************************************/

class ContactController extends BaseController
{
	protected $model;
	
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        $this->model = new ContactModel();
    }
    
    //default method
    protected function index()
    {
       $this->view->render($this->model->index());
    }
}


