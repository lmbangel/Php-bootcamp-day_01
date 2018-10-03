#!/usr/bin/php
<?php

    array_shift($argv);
    $array = array_filter(explode(" ", implode(" ", $argv)));
    sort($array, SORT_STRING | SORT_FLAG_CASE);

    $i = 0;
    while ($array[$i])
    {
        if (!ctype_alpha($array[$i][0]))
        {
            $num[$i] = $array[$i];
            unset($array[$i]);
        }
        $i++;
    }
    $i = 0;
    while ($num[$i])
    {
        if (!ctype_digit($num[$i][0]))
        {
            $sp_car[$i] = $num[$i];
            unset($num[$i]);
        }
        $i++;
    }
    $final = array_merge($array, $num, $sp_car);
    foreach($final as $temp)
        echo $temp."\n";
?>