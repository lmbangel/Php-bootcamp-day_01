#!/usr/bin/php
<?php
    function ft_split($string)
    {
        $new_string = preg_split("/\s+/", trim($string));
        sort($new_string);
        return($new_string);
    }
?>
