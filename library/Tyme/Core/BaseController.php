<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		BaseController.php
	
	@desc		This class is the base controller for all framework controllers
				This class MUST be extended to all controllers

**************************************/

abstract class BaseController 
{
    
	protected $viewModel;
    protected $urlValues;
    protected $action;
    protected $view;
    
    public function __construct($action, $urlValues) {
        $this->action = $action;
        $this->urlValues = $urlValues;
                
        //establish the view object
        $this->view = new View(get_class($this), $action);
    }
        
    //executes the requested method
    public function executeAction() {
        return $this->{$this->action}();
    }
	
	
}

