<?php
include("ft_is_sort.php");

$tab = array( "W", "b");
$tab[] = "eEt qu’est-ce qu’on fait maintenant ?"; 
if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n'est pas trie\n";

?>
