#!/usr/bin/php
<?php
    function ft_is_sort($array)
    {
        $copy = $array;  
        sort($copy);
        if (strcmp(implode(" ", $copy), implode(" ", $array)) == 0)
            return(true);
        else 
           return(false);
    }
?>