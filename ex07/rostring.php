#!/usr/bin/php
<?php  
    $copy = preg_replace("/\s+/", " ", trim($argv[1]));
    $new = preg_split("/\s+/", $copy);

    $tank = $new[str_word_count($copy) - 1];
    unset($new[str_word_count($copy) - 1]);
    echo $tank." ";
 
    $i = 0;
    while ($new[$i])
    {
        echo $new[$i];
        if ($new[$i++])
            echo " ";
    }
    echo "\n";
?>