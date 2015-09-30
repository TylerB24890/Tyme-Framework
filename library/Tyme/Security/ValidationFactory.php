<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.0
	@page		ValidationFactory.php
	
	@desc		This class acts as a factory class for input validation
				It does not handle any database validations

**************************************/

class ValidationFactory extends BaseSecurity {
	
	public function validateData($data, $type) {
		
		$data = trim($data);
		$type = trim($type);
		
		switch($type) {
			case 'int':
				if(!is_int($data))
					return false;
				return true;
				break;
				
			case 'float':
				if(!is_float($data))
					return false;
				return true;
				break;
				
			case 'number':
				if(!is_numeric($data))
					return false;
				return true;
				break;
				
			case 'string':
				if(!is_string($data))
					return false;
				return true;
				break;
				
			case 'array':
				if(!is_array($data))
					return false;
				return true;
				break;
				
			case 'email':
				if(!$this->validateEmail($data))
					return false;
				return true;
				break;
				
			case 'url':
				if(!$this->validateURL($data))
					return false;
				return true;
				break;
		}
		
	}

}