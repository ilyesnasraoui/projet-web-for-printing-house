<?php
include "../entites/promotion.php";
include "../core/promotionc.php";
if(isset($_POST["pourcentage"]) and isset($_POST["delai"]) and isset($_POST["fk_id_produit"]))
{
    $promotion=new promotion($_POST["pourcentage"],$_POST["delai"],$_POST["fk_id_produit"]);
    $promotionc=new promotionc();
    $promotionc->ajouterpromotion($promotion);
    if ($_POST["pourcentage"]>100||$_POST["pourcentage"]<0) {
    	print("le pourcentage doit etre entre 0 et 100");
    }
    if ($_POST["fk_id_produit"]>22||$_POST["fk_id_produit"]<0) {
    	print("les produit sont numerote du 0 a 22");
    }
    else{
    header("location:affichepromotion.php");
    }
}
else
{
    echo "id Déja Utilisé";
}
?>