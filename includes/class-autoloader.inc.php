<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = 'classes/';
    $extention = '.class.php';
    $filename = $path . $className . $extention;

    if (!file_exists($filename)){
        return false;
    }

    include_once $path . $className . $extention;
}