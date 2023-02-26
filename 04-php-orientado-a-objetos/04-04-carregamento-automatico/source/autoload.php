<?php

spl_autoload_register(function ($class) {
    $nameSpace = "Source\\";
    $baseDir = __DIR__ . "/";
    $len = strlen($nameSpace); // contando a qtd de caract. em $nameSpace

    var_dump($len);

    if (strncmp($nameSpace, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    if(file_exists($file)) {
        require $file;
    }
});



