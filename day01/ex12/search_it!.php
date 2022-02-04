#!/usr/bin/php
<?php

if ($argc > 2)
{
    $to_find = $argv[1];
    $i = 2;
    $tab = array();
    while ($i < $argc)
    {
        $tmp = preg_split("/[:]+/", $argv[$i]);
        if (count($tmp) === 2)
            $tab[$tmp[0]] = $tmp[1];
        $i++;
    }
    if (array_key_exists($to_find, $tab))
        print("$tab[$to_find]\n");
}

?>
