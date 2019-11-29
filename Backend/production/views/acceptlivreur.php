<?php
include "livreur_accepte.php";
include "livreur_accepteC.php";
/*if(isset($_POST["cin"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["birthday"]) and isset($_POST["telephone"]) and isset($_POST["license"]) and isset($_POST["license_validity"]) and isset($_POST["adresse"]) and isset($_POST["mdp"]) and isset($_POST["login"]) isset($_POST["joiniable"]) )
{*/
    $livreur=new livreur($_POST["cin"],$_POST["nom"],$_POST["prenom"],$_POST["birthday"],$_POST["telephone"],$_POST["license"],$_POST["license_validity"],$_POST["adresse"],$_POST["joiniable"],$_POST["login"],$_POST["mdp"]);
    

    $livreurC=new livreur_accepteC();
    $livreurC->ajouterLivreur($livreur);
    echo "Votre formulaire a été envoyé avec succés! ";
    
    //header("location:formulaire_livreur.html");
/*}
else
{
    echo "CIN Déja Utilisé";
}*/
?>