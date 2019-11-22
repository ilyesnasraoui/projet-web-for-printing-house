<?php
include "../config.php";
include "../core/produit.php";
$c=new config();
$conn=$c->getConnection();
$e=new produit(2486,"aa","IBM","noir","ordinateur",55,"2019-05-20");
if(isset($_POST['Ajouter']))
{
$myDate = strtotime($_POST["dateC"]);
$myDate = date('Y-m-d H:i:s', $myDate);
$soi=new produit($_POST['codeProd'],$_POST['image'],$_POST['nom'],$_POST['couleur'],$_POST['typee'],$_POST['prix'],$myDate);
$soi->ajouter($soi,$conn);
}

header('LOCATION:ajoutp1.html');
?>