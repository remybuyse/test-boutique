<?php
// Récupérer les données
// Ici : UN produit
include("inc/data.php");
// Il nous faut l'info "quel produit ?"
//On récupère les infos du produit concerné dans le tableau $produits
$product = $products[$_GET["index"]];

include("templates/header.php");

include("templates/product-single.php");

include("templates/footer.php");
 ?>
