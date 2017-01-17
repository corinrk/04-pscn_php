#!/usr/bin/php
<?PHP
if ($argc >1)
	{
	$str = preg_replace('/[\t\s]+/', ' ', trim($argv[1]));
	if (strlen($str)) 
		echo $str."\n";
}
?>
