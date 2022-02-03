#!/usr/bin/php
<?php

if ($argc > 1)
{
    $i = 0;
    $str = trim($argv[1]);
    while ($i < strlen($str))
    {
        if ($str[$i] === ' ')
        {
            print(" ");
            while ($i < strlen($str) && $str[$i] === ' ')
                $i++;
        }
        print($str[$i]);
        $i++;
    }
    print("\n");
}

?>
