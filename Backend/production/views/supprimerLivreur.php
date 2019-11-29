<?php
include "livreur_accepteC.php";

$cin=$_POST["cin"];

$livreurC = new livreur_accepteC();
$livreurC->suppLivreur($cin);
header("location:liste_livreur.php");
?>

