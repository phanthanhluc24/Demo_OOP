<?php
spl_autoload_register('my_autoload');

function my_autoload($ClassName){
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strcoll($url,'Caculation')!== false){
        $path='../Calt/';
    }else{
        $path='Calt/';
    }

    $extension='.class.php';
   require_once $path .$ClassName . $extension;
}

?>