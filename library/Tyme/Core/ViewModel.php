<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ViewModel.php
	
	@desc		This class allows us dynamically set view methods and properties
	
	ex: $this->viewModel->set('pageTitle', 'Home Page');

**************************************/

class ViewModel 
{    
    
    //dynamically adds a property or method to the ViewModel instance
    public function __set($name,$val) {
        $this->$name = $val;
    }
    
    //returns the requested property value
    public function __get($name) {
        if (isset($this->{$name})) {
            return $this->{$name};
        } else {
            return null;
        }
    }
}
