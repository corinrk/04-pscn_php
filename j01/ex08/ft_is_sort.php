<?PHP
function ft_is_sort($array)
{
	$count = 0;
	$str = $array;
	sort($str);
	foreach ($array as $elt)
	{
		if ($elt != $str[$count])
			return false;
		$count++;
	}
	return true; 
}
?>
