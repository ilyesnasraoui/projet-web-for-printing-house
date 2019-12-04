<?php
include "../entites/cartef.php";
include "../core/cartefc.php";
if(isset($_POST["points"])and isset($_POST["id_client"]))
{
    $cartef=new cartef($_POST["points"],$_POST["id_client"]);
    $cartefc=new cartefc();
    $cartefc->ajoutercartef($cartef);
    
    if ($_POST["points"]>10000||$_POST["points"]<0) {
    	print("le plafond du points est 10000");
    }
    if ($_POST["id_client"]>500||$_POST["id_client"]<0) {
    	print("on n'est pas un client avec se identifiant");
    }


    header("location:affichecartefidelite.php");
}
else
{
    echo "id Déja Utilisé";
}
?>