<?php

require 'vendor/autoload.php';

if(isset($_SERVER['PATH_INFO'])){
    if(preg_match('/(css)\/.+?\.(css)/', $_SERVER['PATH_INFO'])){
        header("Content-type: text/css");
        echo file_get_contents('public'.$_SERVER['PATH_INFO']);
        exit;
    } elseif(preg_match('/(js)\/.+?\.(js)/', $_SERVER['PATH_INFO'])){
        header("Content-type: application/javascript");
        echo file_get_contents('public'.$_SERVER['PATH_INFO']);
        exit;
    }
}

$app = new \MidoriKocak\App();
echo $app->render();