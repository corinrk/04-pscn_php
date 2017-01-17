<?php
include_once 'unserialize.php';
function delete_product_id($product_id){
echo ("Hello World\n");
//if ($_POST[delete_product_id] == "Supprimer ID produit")
//{
  $tab_prod = unser("../private/product");
  $i = 0;
  while ($tab_prod[$i])
    {
       echo("be4 if");
      if ($tab_prod[$i]['name'] == $product_id)
        {
          unset($tab_prod[$i]);
          echo("on est ok");
        }
      $i++;
    }
  file_put_contents("../private/product", serialize($tab_prod));
//}
//if ($_POST["add_product_id"] == "Ajouter produit")
//  {
//    $tab = unser("../private/product");
//  }
 }
?>
