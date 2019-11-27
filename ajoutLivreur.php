<?php
include "livreur.php";
include "livreurC.php";
if(isset($_POST["cin"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["birthday"]) and isset($_POST["telephone"]) and isset($_POST["license"]) and isset($_POST["license_validity"]) and isset($_POST["adresse"]))
{
    $livreur=new livreur($_POST["cin"],$_POST["nom"],$_POST["prenom"],$_POST["birthday"],$_POST["telephone"],$_POST["license"],$_POST["license_validity"],$_POST["adresse"]);
    $livreurC=new livreurC();
    $livreurC->ajouterLivreur($livreur);
    echo "Votre formulaire a été envoyé avec succés! ";
    echo "On vous contactera sur mail";

   echo "<br><a href='index.html'>Home</a>";
    //header("location:formulaire_livreur.html");
}
else
{
    echo "CIN Déja Utilisé";
}
?>