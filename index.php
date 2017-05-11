<?php
ob_start();
session_start();
define('ROOT',dirname(__FILE__));
include_once ROOT.'/head.php';
include_once ROOT.'/model/dbconnect.php';
include_once (ROOT.'/components/Router.php');
//include_once (ROOT.'/view_color.php');

//ini_set('display_errors',1);
//error_reporting(E_ALL);
//echo 'ok';





$router = new Router();
$router->run();

