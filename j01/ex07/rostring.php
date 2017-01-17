#!/usr/bin/php
<?PHP
function ft_splitc($str)
{
    $str = eregi_replace("[ ]+", " ", $str);
    $dest = explode(" ", $str);
    return ($dest);
}
$dest = ft_splitc($argv[1]);
$first = array_shift($dest);
foreach ($dest as $elt)
		echo ($elt)." ";
echo $first."\n";
?>
