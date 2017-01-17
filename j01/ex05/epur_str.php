#!/usr/bin/php
<?PHP
$str = trim($argv[1]);
if (strlen($str))
{
$str = eregi_replace("[ ]+", " ", $str);
echo "$str\n";
}
?>
