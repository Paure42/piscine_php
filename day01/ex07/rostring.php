#!/usr/bin/php
<?php

if ($argc > 1)
{
    $str = $argv[1];
    $i = 0;
    $first_word = "";
    $len = strlen($str);
    while ($i < $len && $str[$i] !== ' ')
    {
        $first_word .= $str[$i];
        $i++;
    }
    if ($str[$i] === ' ')
        $first_word = " ".$first_word;
    $i++;
    while ($i < $len)
    {
        if ($str[$i] === ' ')
        {
            print(" ");
            while ($i < $len && $str[$i] === ' ')
                $i++;
            continue;
        }
        print($str[$i]);
        $i++;
    }
    print("$first_word\n");
}

?>
