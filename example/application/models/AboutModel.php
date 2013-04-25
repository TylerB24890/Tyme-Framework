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
		//$page_content = $this->database->select('about', $where = 'id = 1');
		
		$page_content = "Welcome and thank you for your interest in the <a href='http://www.tylerb.me/Tyme' target='_blank'>Tyme Framework</a>! The Tyme Framework is a fully featured, light-weight PHP framework that was designed to be very simple to learn. I built the Tyme Framework to help me better understand the concepts of MVC in PHP. After days of research and studying I began writing the code. One month later from the time of the idea spark, the Tyme Framework was born. The Tyme Framework is built on PHP 5.3 and utilizes the ever so popular <a href='http://www.onlamp.com/pub/a/php/2005/09/15/mvc_intro.html' target='_blank'>MVC (Model, View, Controller)</a> file structure. <p>Tyme Framework is <b>BRAND NEW</b> and is <b>no where near complete</b>. However, the framework is fully functional as it stands. It currently contains all the necessary files for you to successfully build an application on top of it. There are big plans for this framework in the future, so be sure to keep up with the latest version. Future installments include; session security, input validation, cookies, image manipulation and much more.</p><p>If you would like to contribute and help out with the Tyme Framework, please feel free to shoot on over to the official <a href='https://github.com/TylerB24890/Tyme-Framework' target='_blank'>GitHub page</a>. There you will find the source code for the Tyme Framework, as well as this very website.</p><p>If you need any assistance with the framework please consult the <a href='documentation'>docs</a> first and if you are still having trouble please shoot me an email at <a href='mailto:tylerb.media@gmail.com'>tylerb.media@gmail.com</a>. Please feel free to email me with any feature suggestions or comments, and constructive critism is always appreciated.</p><p><b>Again, I want to thank you for your interest in the Tyme Framework. I hope it helps you better understand the concept of MVC and proper Object Oriented PHP.</b></p><p><b>- Tyler Bailey</b><br/><h6><i>Developer, Tyme Framework</i></h6></p>";
		
		foreach($content as $text => $value) {
			$page_content = $value['text'];
		}
		
		$this->viewModel->__set('page-title', 'About Tyme');
		$this->viewModel->__set('about-body', $page_content);
        return $this->viewModel;
    }
}
