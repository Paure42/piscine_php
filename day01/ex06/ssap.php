#!/usr/bin/php
<?php

$tab = array();
$i = 1;

while ($i < $argc)
{
    $tab = array_merge($tab, preg_split("/[\s]+/",$argv[$i]));
    $i++;
}
sort($tab);
foreach($tab as $elem)
{
    print("$elem\n");
}

?>
