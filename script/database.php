<?php
require 'config.php';

function dbConnect(){
    $conn = new mysqli($GLOBALS['DBHOST'], $GLOBALS['DBUSERNAME'], $GLOBALS['DBPASSWORD'], $GLOBALS['DBNAME']);

    return !$conn->connect_error ? $conn : false;
}

