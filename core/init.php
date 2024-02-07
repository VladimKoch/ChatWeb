<?php
//Start Sessions

session_start();



// Include Configuration
require_once('config/config.php');

//Helper Function

require_once('helpers/db_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/system_helper.php');

//Autoloader Classes

function myAutoloader($class_name) {
    require_once('libraries/'.$class_name . '.php');
}
spl_autoload_register('myAutoloader');

?>