<?php

/*************************************

	@project 	Tyme Framework
	@author		Tyler Bailey
	@version	1.1
	@page		Config.php
	
	@desc		This file is the main configuration file for the Tyme Framework

**************************************/


/******************
 *
 *	General App Settings
 *
 ******************/ 
$app_name = ""; //name of application or website
$app_url = ""; //url to application or website
$app_author = ""; //application developer
$app_description = ""; //app description for SEO
$app_keywords = ""; //app keywrods for SEO
$win8_tile_color = ""; //enter color value (ex: #349ed5)
$app_logo = ""; //path to logo for Social Media Sharing
$author_email = ""; //developer email

define('APP_NAME', $app_name);
define('APP_URL', $app_url);
define('APP_AUTHOR', $app_author);
define('APP_DESCRIPTION', $app_description);
define('APP_KEYWORDS', $app_keywords);
define('WIN8_COLOR', $win8_tile_color);
define('APP_LOGO', $app_logo);
define('AUTHOR_EMAIL', $author_email);


/******************
 *
 *	Database Connection Settings
 *
 ******************/ 
$db_host = ""; //database host
$db_user = ""; //database username
$db_pass = ""; //database password
$db_name = ""; //database name
$db_port = "3306"; //3306 is MySQL default port

define('DB_HOST', $db_host);
define('DB_USER', $db_user);
define('DB_PASS', $db_pass);
define('DB_NAME', $db_name);
define('DB_PORT', $db_port);


/* Google Analytics */

