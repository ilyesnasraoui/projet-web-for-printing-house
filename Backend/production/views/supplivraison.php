<?php
include "livraisonC.php";

$id_livraison=$_POST["id_livraison"];

$livraisonC = new livraisonC();
$livraisonC->suppLivraison($id_livraison);
header("location:espace_livreur.php");
?>

