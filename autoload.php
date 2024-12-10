<?php

//method called autoload
function classAutoLoad($classname)
{
    $directories = ["classes", "contents", "forms", "processes", "global", "menus"];

    foreach ($directories as $dir) {
        $filename = dirname(__FILE__) .
            DIRECTORY_SEPARATOR . $dir .
            DIRECTORY_SEPARATOR . $classname . ".php"; // Corrected here

        if (file_exists($filename) and is_readable($filename)) {
            require_once $filename;
        }
    }
}
spl_autoload_register("classAutoLoad"); // Corrected here

// Creating an instance of a class
$ObjLayout = new layout();
$ObjContent = new contents();