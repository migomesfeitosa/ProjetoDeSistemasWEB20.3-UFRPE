<?php

spl_autoload_register(function ($name){
    $require = str_replace("PHPProjeto", "", $name);
    $require = str_replace("\\", DIRECTORY_SEPARATOR, $require);
    require __DIR__ . $require . ".php";
});