<?php
require_once "../config.php";
require_once "../core/CategorieC.php";
if(isset($_POST['nom']) and  isset($_POST['id_cat']) ){
   echo "here";


	$cat=new Categorie($_POST['nom'],$_POST['id_cat']);
	$cat2=new CategorieC();
	$cat2->modifierCategorie($cat);

   header('Location: affichcat1.php');

	
}



