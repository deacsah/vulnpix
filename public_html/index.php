<?php
// change mysql database settings:
$server = "db";
$username = "root";
$password = "w00t";
$database = "vulnpix";

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
$mysqli = new mysqli($server, $username, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
}
include('../code/layout.php');
$mysqli->close();
?>
