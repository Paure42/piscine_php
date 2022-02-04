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

if ($argc === 2)
{
    $arg =  preg_replace("/[\s]/", "", $argv[1]);
    preg_match("/[^+\-*%\/]*/", $arg, $num1);
    preg_match("/[+\-*%\/]/", $arg, $op);
    preg_match("/[^+\-*%\/]*$/", $arg, $num2);
    if ($num1[0] && $num2[0] && count($op) && $op[0] && array_key_exists($op[0], $func_array))
    {
        $res = $func_array[$op[0]]($num1[0], $num2[0]);
        print("$res\n");
    }
    else
        print("Syntax Error\n");
}
else
{
   print("Incorrect Parameters\n");
}

?>
