<?php

function set($name, $value) {
    setcookie($name, $value, time() + 3600);
}

function get($name) {
    if ($_COOKIE[$name])
        echo $_COOKIE[$name]."\n";
}

function del($name) {
    setcookie($name, '', time() - 3600);
}

$action = htmlspecialchars( $_GET['action'] );
$name = htmlspecialchars( $_GET['name'] );
$value = htmlspecialchars( $_GET['value'] );

if ($action === 'set')
    set($name, $value);
else if ($action === 'get')
    get($name);
else if ($action === 'del')
    del($name);
?>
