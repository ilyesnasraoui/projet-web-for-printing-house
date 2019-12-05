<?php
include "../core/promotionc.php";
include "../entites/promotion.php";
$id_promo=$_POST["id_promo"];
//echo $id_promo;
$pourcentage=$_POST["pourcentage"];
$delai=$_POST["delai"];
$fk_id_produit=$_POST["fk_id_produit"];


$promotionc=new promotionc();
$promotionc->modifierpromotion($id_promo,$pourcentage,$delai,$fk_id_produit);
header("location:affichepromotion.php");

