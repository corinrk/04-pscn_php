#!/usr/bin/php
<?PHP
$handle = fopen("php://stdin","r");
while (1)
{
    echo "Entrez un nombre: ";
    $str = fgets($handle);
    if ($str == FALSE)
    {
        echo "\n";
        break;
    }
    $nbr = substr($str, 0, -1);
    if (strlen($nbr) > 0 && is_numeric($nbr))
    {
        echo "Le chiffre ".$nbr." est ";
        if ((int)substr($nbr, -1) % 2)
        {
            echo "Impair";
        }
        else
        {
            echo "Pair";
        }
    }
    else
    {
        echo "'$nbr' n'est pas un chiffre";
    }
    echo "\n";
}
?>
