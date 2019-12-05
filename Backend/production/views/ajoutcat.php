<?php
require_once "../config.php";
require_once "../core/CategorieC.php";

   echo "here";

	

	$cat=new Categorie($_POST['nom'],$_POST['id_cat']);
	$cat2=new CategorieC();
	$cat2->ajouterCategorie($cat);

  header('Location: affichcat1.php');

	




