<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		Home_Model.php
	
	@desc		This class retrieves the data for the About page

**************************************/

class AboutModel extends BaseModel
{
    //data passed to the about index view
    public function index()
    {   
		$content = $this->database->select('about', $where = 'id = 1');
		
		foreach($content as $text => $value) {
			$page_content = $value['text'];
		}
		
		$this->viewModel->__set('page-title', 'About Tyme');
		$this->viewModel->__set('about-body', $page_content);
        return $this->viewModel;
    }
}
