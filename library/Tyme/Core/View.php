<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		View.php
	
	@desc		This class sets the base view file for all the views (/views/Layout/base.php)

**************************************/

class View 
{    
    
    protected $viewFile;
    
    //establish view location on object creation
    public function __construct($controllerClass, $action) {
        $controllerName = str_replace("Controller", "", $controllerClass);
        $this->viewFile = "application/views/" . $controllerName . "/" . $action . ".php";
    }
               
    //output the view
    public function render($viewModel, $template = "base") {
        
        $templateFile = "application/views/Layout/".$template.".php";
        
        if (file_exists($this->viewFile)) {
            if ($template) {
                //include the full template
                if (file_exists($templateFile)) {
                    require_once($templateFile);
                } else {
                    require_once("application/views/error/badtemplate.php");
                }
            } else {
                //we're not using a template view so just output the method's view directly
                require_once($this->viewFile);
            }
        } else {
            require_once("application/views/error/badview.php");
        }
        
    }
	
	public function inlineRender($viewModel) {
	
		$templateFile = $this->viewFile;
        
        if (file_exists($this->viewFile)) {
            include_once($this->viewFile);		
        } else {
            require_once("application/views/error/badtemplate.php");
        } 
	}
}
