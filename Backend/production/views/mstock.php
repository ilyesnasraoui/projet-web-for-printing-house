<?php
include "../config.php";
include "../core/stock.php";
$c=new config();
$conn=$c->getConnection();


if(isset($_POST['Modifier']))
{
 $id=new stock ($_POST['quantite'],$_POST['unite'],$_POST['description'],$_POST['codeprod']);
 $id->modifier($id,$conn);
}

header('LOCATION:mstock1.html');
?>