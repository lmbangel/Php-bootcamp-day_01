#!/usr/bin/php
<?php
    $copy = $argv;
    unset($copy[0]);
    foreach($copy as $temp)
        echo $temp."\n";
?>
