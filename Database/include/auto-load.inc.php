<?php
    spl_autoload_register('Loader');
    function Loader($ClassName){
        $path="Classes/";
        $extention=".class.php";
        $full=$path .$ClassName .$extention;

        include_once $full;
    }


?>