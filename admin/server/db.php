<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$con = mysqli_connect($GLOBALS['db_host'], $GLOBALS['db_user'], $GLOBALS['db_pw'], $GLOBALS['db_name']);

mysqli_set_charset($con, "utf8mb4");

if( mysqli_connect_errno() ){ //If error occurs, returns an error code
    echo 'Database connection error: '.mysqli_connect_error();
    exit;
}