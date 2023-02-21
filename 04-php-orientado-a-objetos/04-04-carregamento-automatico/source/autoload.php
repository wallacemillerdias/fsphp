<?php

spl_autoload_register(function ($class) {
    $nameSpace = "Source\\";
    $baseDir = __DIR__ . "/";
    $len = strlen($nameSpace);

    if (strncmp($nameSpace, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    if(file_exists($file)) {
        require $file;
    }
});



