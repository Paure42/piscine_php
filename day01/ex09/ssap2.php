#!/usr/bin/php
<?php
$tab = array();
$tab_num = array();
$tab_alpha = array();
$tab_spec = array();
$i = 1;

function print_tab($tab)
{
    foreach($tab as $elem)
     print("$elem\n");
}

while ($i < $argc)
{
    $tab = array_merge($tab, preg_split("/[\s]+/",$argv[$i]));
    $i++;
}
foreach ($tab as $elem)
{
    if (ctype_alpha($elem))
        $tab_alpha[] = $elem;
    else if (ctype_alnum($elem))
        $tab_num[] = $elem;
    else
        $tab_spec[] = $elem;
}
sort($tab_alpha, SORT_FLAG_CASE | SORT_NATURAL);
sort($tab_num, SORT_STRING);
sort($tab_spec);
print_tab($tab_alpha);
print_tab($tab_num);
print_tab($tab_spec);

?>
