#!/usr/bin/php
<?php
    array_shift($argv);
    if ($argc == 4)
    {
        $return = implode(" ", $argv);
        eval("echo $return;");
    }
    else
        echo "Incorrect Parameters";
    echo "\n";
?>