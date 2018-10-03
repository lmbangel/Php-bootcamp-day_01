#!/usr/bin/php
<?php
array_shift($argv);
$array = array_filter(explode(" ", implode(" ", $argv)));
sort($array);
foreach ($array as $item)
    printf("%s\n", $item);
?>