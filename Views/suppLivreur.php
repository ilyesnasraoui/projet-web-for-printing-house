<?php
include "livreurC.php";

$cin=$_POST["cin"];

$livreurC = new livreurC();
$livreurC->suppLivreur($cin);
header("location:affichLivreur.php");


