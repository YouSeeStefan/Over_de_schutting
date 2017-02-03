<?php
//$mysqli = new mysqli("localhost", "root", "", "thewall");
//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}  

$mysqli = new mysqli("localhost", "root", "duwmxemx", "cms");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}   


$kaas = "kanker";
$pizza = "spillo";