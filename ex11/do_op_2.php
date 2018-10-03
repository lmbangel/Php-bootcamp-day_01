#!/usr/bin/php
<?php
    array_shift($argv);
    if ($argc == 2)
    {
        eval("echo $argv[1];");

    }
    else
        echo "Incorrect Parameters";
?>