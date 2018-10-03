#!/usr/bin/php
<?php
    $new_string = preg_replace("/\s+/"," ", trim($argv[1]));
    print_r($new_string);
    echo "\n";
?>