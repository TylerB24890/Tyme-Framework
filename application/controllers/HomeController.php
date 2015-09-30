<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.0
	@page		HomeController.php
	
	@desc		This class controls the home page

**************************************/

class HomeController extends BaseController {
	protected $model;
	
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        $this->model = new HomeModel();
    }
    
    //default method
    protected function index() {		
		$this->view->render($this->model->index());
    }
}
