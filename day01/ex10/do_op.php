#!/usr/bin/php
<?php

function add($num1, $num2) { return $num1 + $num2; }
function sub($num1, $num2) { return $num1 - $num2; }
function div($num1, $num2) { return $num1 / $num2; }
function mod($num1, $num2) { return $num1 % $num2; }
function mul($num1, $num2) { return $num1 * $num2; }

$func_array = [
    '+' => 'add',
    '-' => 'sub',
    '/' => 'div',
    '%' => 'mod',
    '*' => 'mul'
];

if ($argc === 4)
{
    $num1 = preg_replace("/[\s]/", "", $argv[1]);
    $op = preg_replace("/[\s]/", "", $argv[2]);
    $num2 = preg_replace("/[\s]/", "", $argv[3]);
    if (array_key_exists($op, $func_array))
    {
        $res = $func_array[$op]($num1, $num2);
        print("$res\n");
    }
}
else
{
   print("Incorrect Parameters\n");
}

?>
