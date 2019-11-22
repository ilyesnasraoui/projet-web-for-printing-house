<?php
include_once'../config.php';
   function ajouter($e,$conn)
  {
    $sql="INSERT INTO produit(codeProd,image,nom,couleur,typee,prix,dateC)
    values('".$e->getcodeprod()."','".$e->getimage()."','".$e->getnom()."','".$e->getcouleur()."','".$e->gettypee()."','".$e->getprix()."','".$e->getdateC()."')";
    $conn->query($sql);
  }
   function afficher($conn)
  {
    $sql="SELECT * FROM produit";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  function supprimer($id,$conn)
  {
    $sql="DELETE FROM  produit WHERE codeProd=".$id;
    $conn->exec($sql);
  }
   function rechercher($codeProd,$conn){
  $sql="SELECT * FROM produit WHERE codeProd=".$codeProd;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}
  function modifier($id,$conn)
  {
      $sql = 'UPDATE produit SET image="'.$id->getimage().'",nom="'.$id->getnom().'", couleur="'.$id->getcouleur().'",typee="'.$id->gettypee().'",prix="'.$id->getprix().'",dateC="'.$id->getdateC().'" WHERE codeProd="'.$id->getcodeprod().'"';
      $conn->exec($sql);
  }

}
 ?>
