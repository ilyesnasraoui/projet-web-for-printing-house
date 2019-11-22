<?php

include "../config.php";
include "../core/produit.php";
$c=new config();
$conn=$c->getConnection();


if(isset($_POST['Modifier']))
{
$myDate = strtotime($_POST["dateC"]);
$myDate = date('Y-m-d H:i:s', $myDate);
 $id=new produit ($_POST['codeProd'],$_POST['image'],$_POST['nom'],$_POST['couleur'],$_POST['typee'],$_POST['prix'],$myDate);
 $id->modifier($id,$conn);
}

header('LOCATION:mprod1.html');
?>