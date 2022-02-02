<?php

function ft_split($string)
{
    $tab = array();
    $n = 0;
    $i = 0;

    while ($i < strlen($string))
    {
        $c = $string[$i];
        if (ctype_space($c) === TRUE)
        {
            if (empty($tab[$n]) === FALSE)
                $n++;
        }
        else
        {
            if (empty($tab[$n]) === TRUE)
                $tab[$n] = $c;
            else
                $tab[$n] = $tab[$n].$c;
        }
        $i++;
    }
    return $tab;
}

?>
