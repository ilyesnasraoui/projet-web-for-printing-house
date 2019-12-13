<?php
require_once "../config.php";
require_once "../core/ProduitC.php";
if(isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['idcat']) and isset($_POST['description']) and isset($_POST['quantite'])) {
   echo "here";

if(isset($_FILES['image'])){
	$errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("png","jpg","jpeg");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed.";
      }
      
      if($file_size > 20971520){
         $errors[]='File size must be excately 20 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
        
         /*echo '<script language="javascript">';
         echo 'alert("Success!");
         document.location.href = "index.php";';
         echo '</script>';*/
      }else{
         print_r($errors);
      }
      if($file_name=="")
      {
         $tmpP=new ProduitC();
         $result=$tmpP->getProduit($_POST['id_produit']);
         foreach($result as $rw)
            $file_name=$rw['image'];
      }
      else
      $file_name="images/".$file_name;}
      

	$prod=new Produit($_POST['id_produit'],$_POST['nom'],$_POST['prix'],$_POST['description'],$_POST['quantite'],1,$_POST['idcat'],$file_name);
	$prod2=new ProduitC();
	$prod2->modifierProduit($prod);

   header('Location: afichprod1.php');

	
}



