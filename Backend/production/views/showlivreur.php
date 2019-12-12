<?php  

include 'livreur_accepteC.php';
$db = config::getConnexion();

$livreurC = new livreur_accepteC();
$listelivreur=$livreurC->afficherLivreur();
header("location:liste_livreur.php");
?>