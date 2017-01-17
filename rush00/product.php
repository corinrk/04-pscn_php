<?php
include_once 'unserialize.php';
function delete_produit($tab)
if ($_POST[delete_product_id] == "Supprimer le produit")
{
  $tab = unser("../private/base_asie");
  foreach ($variable as $product)
   {
    foreach ($product as $key => $value)
     {
      if ($value == $_POST['product_id'])
      {
        unset($tab[$i]);
        return (1);
     }
      $i++;
    }
  return (0);
}
if ($_POST["add_product_id"] == "Ajouter produit")
{
  $tab = unser("../private/product");
}
?>
