<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.0
	@page		BaseSecurity.php
	
	@desc		This class is the base security class that must be extended off of all other security classes

**************************************/

class BaseSecurity
{
	
	/* Generate TymeToken() For Forms */
	public function TymeToken() 
	{
		$TymeToken = md5(uniqid(rand(), TRUE)) . $this->randomString($length = 32);
		return $TymeToken; 
	}
	
	/* Generate CSRF Token */
	public function csrfGenerate($key = 'general'){		
		$token = sha1(time().$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].$this->randomString($length = 17));
		$_SESSION['csrf'][$key] = $token;
        return $token;
    }
	
	/* Check CSRF Token */
	protected function csrfCheck($key = 'general'){
		//check if a token is even set
        if(empty($_SESSION['csrf'][$key])){
			return false;
		}
		//check if the token was set with the form 
        if(empty($_REQUEST[$key])){
			return false;
		}
        //check if the submitted token matches the session token
        if($_REQUEST[$key] != $_SESSION['csrf'][$key]){
			return false;
		}
		
        return true;
    }
	
	/* Clean User Input */
	public function cleanInput($data, $html = true)
	{
		if(empty($data)) {
			return false;
		}
		
		$input = trim($data);
		// Prevent potential Unicode codec problems.
		$input = utf8_decode($input);
		
		if($html === true) {
			
			//allow HTML
			$input = htmlentities($input, ENT_NOQUOTES);
			$input = str_replace("#", "&#35;", $input);
			$input = str_replace("%", "&#37;", $input);
			
			return $input;
			
		} else {
		
			//strip HTML
			$input = strip_tags($data); //remove all html & javascript
		}
		return $input;
	}
	
	/* Validate Email Address */
	protected function validateEmail($email)
	{
		//check email against PHP's email filter
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return false;
		}	
		//split email to get domain name
		list($user, $domain) = split('@', $email);
		//check domain name again MX records and A records for legitimacy	
		if(!checkdnsrr($domain, 'MX') && !checkdnsrr($domain, 'A')) {
			return false;
		}
		return true;
	}
	
	/* Validate Web URL */
	protected function validateURL($data)
	{
		if(!filter_var($url, FILTER_VALIDATE_URL)) {
			return false;
		}
		return true;
	}
	
	/* Generate Random String */
	public function randomString($length = 20) {
		
		$randomStr = bin2hex(openssl_random_pseudo_bytes($length));
		return $randomStr;
	}

}