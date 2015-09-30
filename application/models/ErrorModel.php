<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ErrorModel.php
	
	@desc		This class retrieves the data for the Error pages

**************************************/

class ErrorModel extends BaseModel {    
    //data passed to the bad URL error view
    public function badURL() {
        $this->viewModel->__set("title","Error - Bad URL");
        return $this->viewModel;
    }
}
