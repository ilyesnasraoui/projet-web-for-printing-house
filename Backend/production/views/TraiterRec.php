<?php
include "../core/ReclamationC.php";
include "../entites/Reclamation.php";
$id=$_POST["id"];



$Reclamation1C=new ReclamationC();
$Reclamation1C->ModifierRec($id);
header("location:AfficherRec.php");

