<?php
include "../core/cartefc.php";
include "../entites/cartef.php";
$id_carte=$_POST["id_carte"];
//echo $id_promo;
$points=$_POST["points"];
$id_client=$_POST["id_client"];

$cartefc=new cartefc();
$cartefc->modifiercartef($id_carte,$points,$id_client);
header("location:affichecartefidelite.php");

