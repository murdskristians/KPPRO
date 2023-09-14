<?php

// IF PRODUCTION SERVER
//if (
//    stripos($_SERVER['HTTP_HOST'], "export.salonsarka.lv") !== false
//) {
//    $GLOBALS['db_host'] = 'localhost';
//    $GLOBALS['db_user'] = 'salonsarka_dbuser';
//    $GLOBALS['db_pw'] = 'Y&fZ%9d;^U?@';
//    $GLOBALS['db_name'] = 'salonsarka_db';
//
//    $GLOBALS['shop_email_server'] = 'mail.salonsarka.lv';
//    $GLOBALS['shop_email'] = 'info@export.salonsarka.lv';
//    $GLOBALS['shop_email_pw'] = 'z94I0ZaNXM7u';
//
//    $GLOBALS['shop_receiving_email'] = 'veikals@salonsarka.lv';
//    $GLOBALS['shop_receiving_email_pw'] = ')h1N1ujn+,Ha';



    // IF TEST SERVER
//} else {

    $GLOBALS['db_host'] = 'localhost';
    $GLOBALS['db_user'] = 'arkadb_user';
    $GLOBALS['db_pw'] = '235dZ4pIaoc~hStyt';
    $GLOBALS['db_name'] = 'arkadb';

//    $GLOBALS['shop_email_server'] = 'mail.shopdev.lv';
//    $GLOBALS['shop_email'] = 'arka@shopdev.lv';
//    $GLOBALS['shop_email_pw'] = 'Janekr5t3t_8C4fOi';
//
//    $GLOBALS['shop_receiving_email'] = 'arka@shopdev.lv';
//    $GLOBALS['shop_receiving_email_pw'] = 'Janekr5t3t_8C4fOi';

//}