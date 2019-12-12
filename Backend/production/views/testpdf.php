<<?php 
require_once __DIR__ . '/vendor/autoload.php';
include "../entites/cartef.php";
include "../core/cartefc.php";
   
    $points=$_POST["points"];
    $id_carte=$_POST["id_carte"];
    $id_client=$_POST["id_client"];



$mpdf = new \Mpdf\Mpdf();

$data ='';
$data .= '<h1>YOUR DETAILS </h1>'; 
$data .= '<strong>id of card </strong>' . $id_carte. '<br />';
$data .= '<strong>id of client </strong>' . $id_client. '<br />';
$data .= '<strong>Number of points </strong>' . $points. '<br />';

$data .= '<img src="../img/11.jpg" style="height: 130px; width: 100px;">' ;

$mpdf->WriteHTML($data);




$mpdf->Output('myfile.pdf','D');


 ?>