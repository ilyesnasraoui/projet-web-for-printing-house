<?php
require_once "../config.php";
require_once "../core/ProduitC.php";
if( isset($_POST['nom'])  and isset($_POST['prix']) and isset($_POST['idcat']) and isset($_POST['description']) and isset($_POST['dateC'])) {
   echo "here";

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
      $file_name="images/".$file_name;

	$prod=new Produit('1',$_POST['nom'],$_POST['prix'],$_POST['description'],$_POST['quantite'],'1',$_POST['idcat'],$file_name);
	$prod2=new ProduitC();
	$prod2->ajouterProduit($prod);

    header('Location: ajoutp1.php');


}
