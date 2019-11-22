<?php
include "../configa.php";


   function ajouter($e,$conn)
  {
    $sql="INSERT INTO stock(quantite,unite,description,codeprod)
    values('".$e->getquantite()."','".$e->getunite()."','".$e->getdescription()."','".$e->getcodeprod()."')";
    $conn->query($sql);
  }
   function afficher($conn)
  {
    $sql="SELECT * FROM stock";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  function supprimer($id,$conn)
  {
    $sql="DELETE FROM  stock WHERE quantite=".$id;
    $conn->exec($sql);
  }
   function modifier($id,$conn)
  {
      $sql = 'UPDATE stock SET quantite="'.$id->getquantite().'",unite="'.$id->getunite().'",description="'.$id->getdescription().'" WHERE codeprod="'.$id->getcodeprod().'"';
      $conn->exec($sql);
  }

     function afficherDESC()
     {
    $sql="select * from stock ORDER BY quantite DESC";
    $c = configa::getConnexion();
    return ($c->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from stock ORDER BY quantite ASC";
    $c = configa::getConnexion();
    return ($c->query($sql));
    }

   function rechercher($e,$conn){
  $sql="SELECT * FROM stock WHERE quantite=".$e;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}

    
}
 ?>
