<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		ErrorHandler.php
	
	@desc		This class allows for extra control over the error logs

**************************************/


class ErrorHandler {

	public function logError($number = 0, $string, $file = 'Undefined', $line = 0, $context = array()){
		$error_log = '['.date('H:i:s - d/m/Y', time()).']'."\n".'File: '.str_replace(BASE_PATH, '', $file).''."\n".'Line: '.$line.''."\n".'Error: '.$string."\n ------------------------------------------------------------ \n";
		
		try{
			$theFile = @fopen(SITE_ROOT .'/errors.log', 'a');
			$error = @fwrite($theFile, $error_log);
			@fclose($theFile);
		}
		catch(PDOException $pe){
			error_log($error_log);
		}
	}
	
	public function showErrLog(){
		$log = 'No system errors.';
		$rows = 2;
		
		if(@file_exists(SITE_ROOT .'/errors.log')){
			$log = @file_get_contents(SITE_ROOT .'/errors.log');
			$rows = ceil(@filesize(SITE_ROOT .'/errors.log')/30);
			
			if($rows > 30){
				$rows = 30;
			}
		}
		
		return '<textarea rows="'.$rows.'" readonly="readonly" class="span8">'.$log.'</textarea>';
	}
	
	public function clearLog($admin = false){
		if(!$admin){
			return false;
		}
		
		if(@file_exists(SITE_ROOT . '/errors.log')){
			@unlink(SITE_ROOT .'/errors.log');
		}
		
		return true;
	}
}