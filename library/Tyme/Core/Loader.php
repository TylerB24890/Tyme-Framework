<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		Loader.php
	
	@desc		This class loads and retrieves all controllers/actions based on the url parameters

**************************************/


class Loader {
    
    private $controllerName;
    private $controllerClass;
    private $action;
    private $urlValues;
    
    //store the URL request values on object creation
    public function __construct() {
        $this->urlValues = $_GET;
        
        if ($this->urlValues['controller'] == "") {
            $this->controllerName = "HomeController";
            $this->controllerClass = "HomeController";
        } else {
            $this->controllerName = ucfirst(strtolower($this->urlValues['controller'])) . "Controller";
            $this->controllerClass = ucfirst(strtolower($this->urlValues['controller'])) . "Controller";
        }
        
        if ($this->urlValues['action'] == "") {
            $this->action = "index";
        } else {
            $this->action = $this->urlValues['action'];
        }
    }
                  
    //factory method which establishes the requested controller as an object
    public function createController() {
        //check our requested controller's class file exists and require_once it if so
        if (!file_exists("application/controllers/" . $this->controllerName . ".php")) {
            return new ErrorController("badurl",$this->urlValues);
        }
                
        //does the class exist?
        if (class_exists($this->controllerClass)) {
            $parents = class_parents($this->controllerClass);
            
            //does the class inherit from the BaseController class?
            if (in_array("BaseController",$parents)) {   
                //does the requested class contain the requested action as a method?
                if (method_exists($this->controllerClass,$this->action)) {
                    return new $this->controllerClass($this->action,$this->urlValues);
                } else {
                    //bad action/method error
                    return new ErrorController("badurl",$this->urlValues);
                }
            } else {
                //bad controller error
                return new ErrorController("badurl",$this->urlValues);
            }
        } else {
            //bad controller error
            return new ErrorController("badurl",$this->urlValues);
        }
    }
}
