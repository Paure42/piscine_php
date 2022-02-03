<?php

function ft_is_sort($tab)
{
    $my_tab = $tab;
    sort($my_tab);
    if ($my_tab === $tab)
        return TRUE;
    else
        return FALSE;
}

?>
