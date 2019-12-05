<?php
require_once "../config.php";
require_once "../core/CategorieC.php";
if(isset($_POST['deleteID'])){
	$prod=new CategorieC();
	$prod->supprimerCategorie($_POST['deleteID']);
	header('Location: affichcat1.php');
}
?>