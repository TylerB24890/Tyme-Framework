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
	public $doc_nav;
	
	//establish global documentation navigation
	public function __construct()
	{
		parent::__construct();
		
		$this->doc_nav = 	"<ul>
								<li><a href='" . SITE_ROOT . "documentation/intro'>Introduction</a></li>
								<li><a href='" . SITE_ROOT . "documentation/loader'>Loader (Routing)</a></li>
								<li><a href='" . SITE_ROOT . "documentation/controllers'>Controllers</a></li>
								<li><a href='" . SITE_ROOT . "documentation/models'>Models</a></li>
								<li><a href='" . SITE_ROOT . "documentation/views'>Views</a></li>
							</ul>";
		
		$this->viewModel->__set('doc-nav', $this->doc_nav);
	}
	
    public function index()
    {   	
		$this->viewModel->__set('page-title', 'Learn Tyme');
        return $this->viewModel;
    }
	
	public function intro()
	{
		$this->viewModel->__set('page-title', 'Learn Tyme - Introduction');
		return $this->viewModel;
	}
	
	public function loader()
	{
		$this->viewModel->__set('page-title', 'Learn Tyme - Loader (Routing)');
		return $this->viewModel;
	}
	
	public function controllers()
	{
		$this->viewModel->__set('page-title', 'Learn Tyme - Controllers');
		return $this->viewModel;
	}
	
	public function models()
	{
		$this->viewModel->__set('page-title', 'Learn Tyme - Models');
		return $this->viewModel;
	}
	
	public function views()
	{
		$this->viewModel->__set('page-title', 'Learn Tyme - Views');
		return $this->viewModel;
	}
}
