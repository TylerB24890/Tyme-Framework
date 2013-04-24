<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		BaseModel.php
	
	@desc		This class is the base model for all framework models

**************************************/

class BaseModel 
{
    
    protected $viewModel;
	protected $database;

    //create the base and utility objects available to all models on model creation
    public function __construct()
    {
		$this->viewModel = new ViewModel(); //istantiate ViewModel
		$this->commonViewData();	
		
		//istantiate Database object
		$this->database = new Database("mysql:host=".DB_HOST.";dbname=".DB_NAME.";dbport=".DB_PORT."", DB_USER, DB_PASS);
    }

    //establish viewModel data that is required for all views in this method (i.e. base.php)
    protected function commonViewData() {
		//include app configuration file
		$this->viewModel->__set('siteInfo', array( 'title' => APP_NAME, 'author' => APP_AUTHOR, 'description' => APP_DESCRIPTION, 'keywords' => APP_KEYWORDS, 'url' => APP_URL, 'logo' => APP_LOGO ));
		$this->viewModel->__set('copyright', 'Copyright &copy; 2013. <a href="' . APP_URL . '">' . APP_NAME . "</a>. " . "All Rights Reserved.");
    }

}
