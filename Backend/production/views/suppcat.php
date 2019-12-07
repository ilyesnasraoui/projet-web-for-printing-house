<?php
require_once "../config.php";
require_once "../core/ProduitC.php";
if(isset($_POST['deleteID'])){
	$prod=new ProduitC();
	$prod->supprimerProduit($_POST['deleteID']);
	header('Location: afichprod1.php');
}
?>