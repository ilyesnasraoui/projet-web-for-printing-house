<?php
include "../config.php";
include "../core/stock.php";
$c=new config();
$conn=$c->getConnection();
$e=new stock(50,150,"aa",123);
if(isset($_POST['Ajouter'])){
$soi=new stock($_POST['quantite'],$_POST['unite'],$_POST['description'],$_POST['codeprod']);
$soi->ajouter($soi,$conn);

}

header('LOCATION:ajouts1.html');
?>