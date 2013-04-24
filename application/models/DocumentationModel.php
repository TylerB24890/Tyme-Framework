<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		DocumentationModel.php
	
	@desc		This class retrieves & stores the data for the documentation

**************************************/

class DocumentationModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
		$this->viewModel->__set('page-title', 'Learn Tyme');
        return $this->viewModel;
    }
}
