<?php
ob_start();
session_start();

// database setting //
define("URL","http://{$_SERVER['SERVER_NAME']}/all_blog/");
define("PATH","{$_SERVER['DOCUMENT_ROOT']}/all_blog/");
define("ADMINPATH","{$_SERVER['DOCUMENT_ROOT']}/all_blog/");
define ("DBHOST","localhost");
define ("DBNAME", "blog");
define ("DBUSER", "root");
define ("DBPASS","");
define ("APP_MODE","");
define ("PROFILEURL", "http://{$_SERVER['SERVER_NAME']}/all_blog/images/profile/");
define ("IMAGEURL", "http://{$_SERVER['SERVER_NAME']}/all_blog/images/");


// Enable error For disable replace 1 to 0 //
ini_set('display_errors',1);

// set max execution time of site//
ini_set ( 'max_execution_time', 1800);

// Added TimeZone
date_default_timezone_set('America/New_York');


//Section User Status End// 

include_once("private/configuration.php");
require_once("classes/dbHandler.php");
?>