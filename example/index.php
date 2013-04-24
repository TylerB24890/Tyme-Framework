<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		index.php
	
	@desc		This file includes all the required files to make this framework run
				index.php acts as the bootstrap or init file for the Tyme Framework

**************************************/

//define the site root
define('APP_ROOT', '');

//include application configuration file
include_once(APP_ROOT . 'library/Tyme/Core/Config.php');

//load the required classes
function tyme_autoload($class_name) 
{
    // List all the class directories in the array.
    $array_paths = array(
        APP_ROOT . 'library/Tyme/Core/',
		APP_ROOT . 'library/Tyme/Security/',
        APP_ROOT . 'application/controllers/',
		APP_ROOT . 'application/models/'
    );
    foreach($array_paths as $path)
    {
        $file = sprintf('%s/%s.php', $path, $class_name);
        if(is_file($file)) 
        {
            require_once($file);
        } 
    }
}

spl_autoload_register('tyme_autoload');

$loader = new Loader(); //create the loader object
$controller = $loader->createController(); //creates the requested controller object based on the 'controller' URL value
$controller->executeAction(); //execute the requested controller's requested method based on the 'action' URL value. Controller methods output a View.