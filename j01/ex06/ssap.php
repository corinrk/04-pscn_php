#!/usr/bin/php
<?php
    $array = array();
    unset($argv[0]);
    foreach($argv as $elt){
        $tmp = array_filter(explode(' ', $elt));
        foreach ($tmp as $elt2)
            $array[] = $elt2;
    }
    sort($array);
    foreach ($array as $elt)
        echo $elt."\n";
?>
