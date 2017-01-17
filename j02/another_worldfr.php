#!/usr/bin/php
<?PHP
 $tok =  strtok($argv[1]," \n\t");
 $i = 0;
 while($tok !=  false)
 {
   $tab[$i] = $tok;
   $tok = strtok(" \n\t");
   $i = $i + 1;
 }
 $i2 = 0;
 foreach ($tab as $elem)
 {
        echo  $elem;
        if ($i2 ==  $i - 1)
            echo "\n";
        else
        {
            echo  " ";
        }
   $tok = strtok(" \n\t");
   $i2 = $i2 + 1;
 }
?>Cette   phrase   contient des espaces et        des      tabulations