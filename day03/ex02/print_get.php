<?php

foreach ($_GET as $key => $value) {
    echo htmlspecialchars($key).": ".htmlspecialchars($value)."\n";
}

?>
