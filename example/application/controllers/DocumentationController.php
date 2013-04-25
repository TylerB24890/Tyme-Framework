<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		DocumentationController.php
	
	@desc		This class controls the documentation page

**************************************/

class DocumentationController extends BaseController
{
	protected $model;
	
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        $this->model = new DocumentationModel();
    }
    
    //default method
    protected function index()
    {		
		$this->view->render($this->model->index());
    }
	
	protected function intro()
	{
		$this->view->render($this->model->intro());
	}
}

