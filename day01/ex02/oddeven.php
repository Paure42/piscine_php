#!/usr/bin/php
<?php
while(1)
{
    print("Entrez un nombre: ");
    $line = fgets(STDIN);
    if ($line === FALSE)
        break;
    $line = trim($line);
    if (is_numeric($line) === TRUE)
    {
            if ($line % 2 === 0)
                print("Le chiffre $line est Pair\n");
            else
                print("Le chiffre $line est Impair\n");
    }
    else
        print ("'$line' n'est pas un chiffre\n");
}

?>
