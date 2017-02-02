<?php

ini_set('display_errors', 'On');

define('APP_ROOT',__DIR__);
define('VIEW_ROOT',APP_ROOT . '/views');
define('BASE_URL','http://localhost/vanklomptotkunst/vanklomptotkunst/CMS/' );


$servername = "localhost";
$username = "root";
$password = "duwmxemx";

try {
    $conn = new PDO("mysql:host=$servername;dbname=21281_cms", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "" . $e->getMessage();
    }
require 'functions.php';