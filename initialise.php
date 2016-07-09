<?php
define('ROOT',  $_SERVER['DOCUMENT_ROOT'].'/phptest/');

include_once ROOT.'class/Database.class.php';
include_once ROOT.'class/Session.class.php';
include_once ROOT.'class/User.class.php';

// Define configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'test1');

$db = new Database();
$session = new Session("XGv3lBpUIX");
$session->start();
