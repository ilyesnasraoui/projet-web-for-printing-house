<?php
include "livreur_accepteC.php";

$cin=$_POST["cin"];
$joiniable=$_POST["joiniable"];

$livreur_accepteC=new livreur_accepteC();
$livreur_accepteC->modifierLivreur($cin,$joiniable);
header("location:liste_livreur.php");

