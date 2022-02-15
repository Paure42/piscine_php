#!/usr/bin/php
<?php

if ($argc > 1)
{
    $line = $argv[1];
    print(preg_replace("/[^\S]+/", " ", $line)."\n");
}

?>
