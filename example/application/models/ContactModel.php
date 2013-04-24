<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ContactModel.php
	
	@desc		This class retrieves & stores the data for the contact page

**************************************/

class ContactModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
		$this->viewModel->__set('page-title', 'Contact Ty');
        return $this->viewModel;
    }
}
