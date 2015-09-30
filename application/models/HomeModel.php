<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		HomeModel.php
	
	@desc		This class retrieves & stores the data for the Home page

**************************************/

class HomeModel extends BaseModel {
    //data passed to the home index view
    public function index() {   
		//set your dynamic page elements here
		$this->viewModel->__set('page-title', 'Welcome to the Tyme Framework!');
        return $this->viewModel;
    }
}
