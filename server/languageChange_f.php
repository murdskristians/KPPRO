<?php

include $_SERVER['DOCUMENT_ROOT'] . "/admin/server/db.php";
global $con;

if(isset($_POST['set_session'])){
    set_session($_POST['lang']);
}

function set_session($lang){
    session_start();

    $_SESSION['lang'] = $lang;
}

function check_session(){
    if (!$_SESSION['lang']) {
        $_SESSION['lang'] = 'en';
    }
}
check_session();