<?php

if(session_id() === ""){
    session_start();
}

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$url = $_GET['url'];

require_once(ROOT . DS . 'library' . DS . 'bootstrap.php');