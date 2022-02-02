#!/usr/bin/php

<?php

$i = 0;
$nl = 0;
while ($i++ < 1000)
{
    if ($nl === 100)
    {
        print ("\n");
        $nl = 0;
    }
    print ("x");
    $nl++;
}
print ("\n");

?>
