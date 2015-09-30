<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ErrorController.php
	
	@desc		This class controls the error pages (404, 403, etc...)

**************************************/


class ErrorController extends BaseController {    
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        $this->model = new ErrorModel();
    }
    
    //bad URL request error
    protected function badURL() {
        $this->view->render($this->model->badURL());
    }
}
