<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ContributeController.php
	
	@desc		This class controls the contribution page

**************************************/

class ContributeController extends BaseController
{
	protected $model;
	
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        $this->model = new ContributeModel();
    }
    
    //default method
    protected function index()
    {		
		$this->view->render($this->model->index());
    }
}

