<?php
require_once 'database.php';

session_start();

function login($username, $password){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
}

function validate(){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    if(!$username || !$password) header('Location: login.php');
    $result = dbConnect()->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
    if($result->num_rows != 1) header('Location: login.php');
}