<?php

//INITIAL SETUP
ob_start(); 
session_start();
// session_destroy();
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR); 



defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front"); 
// echo TEMPLATE_FRONT; 

echo nl2br("\n");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back"); 
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads"); 
// echo TEMPLATE_BACK; 



//DEFINING DATABASE HOST 
defined("DB_HOST") ? null : define("DB_HOST", "localhost"); 

//DEFINING DATABASE USER 
defined("DB_USER") ? null : define("DB_USER", "root"); 

//DEFINING DATABASE PASSWORD
defined("DB_PASS") ? null : define("DB_PASS", ""); 

//DEFINING DATABASE NAME
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db"); 

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once("functions.php"); 
require_once("cart.php");
?> 
