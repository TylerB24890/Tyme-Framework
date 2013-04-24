<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ContributeModel.php
	
	@desc		This class retrieves & stores the data for the contribution page

**************************************/

class ContributeModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
		$this->viewModel->__set('page-title', 'Contribute to Tyme');
        return $this->viewModel;
    }
}
