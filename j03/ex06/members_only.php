<?php
$pwd = ( $_SERVER['PHP_AUTH_PW'] == null ) ? null : $_SERVER['PHP_AUTH_PW'];
$ns = ( $_SERVER['PHP_AUTH_USER'] == null ) ? null : $_SERVER['PHP_AUTH_USER'];
if ( "zaz:jaimelespetitsponeys" === ( $ns . ':' . $pwd ) )
{
	$file = file_get_contents('../img/42.png');
    echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/jpeg;base64,".base64_encode($file)."'>\n</body></html>\n";
}
else
{
	header( "WWW-Authenticate: Basic realm=''Espace membres''" );
 	header('HTTP/1.0 401 Unauthorized');
	echo( "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>" . "\n");
}
?>
