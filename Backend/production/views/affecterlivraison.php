<?php
include "livraison.php";
include "livraisonC.php";
/*if(isset($_POST["cin"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["birthday"]) and isset($_POST["telephone"]) and isset($_POST["license"]) and isset($_POST["license_validity"]) and isset($_POST["adresse"]) and isset($_POST["mdp"]) and isset($_POST["login"]) isset($_POST["joiniable"]) )
{*/
    $livraison=new livraison($_POST["id_livraison"],$_POST["cin"],$_POST["dteliv"],$_POST["id_commande"]);
    

    $livraisonC=new livraisonC();
    $livraisonC->ajouterLivraison($livraison);
    echo "Votre formulaire a été envoyé avec succés! ";
    
    //header("location:formulaire_livreur.html");
/*}
else
{
    echo "CIN Déja Utilisé";
}*/
?>