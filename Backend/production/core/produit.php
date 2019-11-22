<?php
class produit{
  private $_codeProd;
  private $_image;
  private $_nom;
  private $_couleur;
  private $_typee;
  private $_prix;
  private $_dateC;

  public function __construct($codeProd,$image,$nom,$couleur,$typee,$prix,$dateC)
  {

    $this->_codeProd=$codeProd;
    $this->_image=$image;
    $this->_nom=$nom;
    $this->_couleur=$couleur;
    $this->_typee=$typee;
    $this->_prix=$prix;
    $this->_dateC=$dateC;

  }

  public function getcodeprod()
  {
    return $this->_codeProd;
  }
  public function getimage()
  {
    return $this->_image;
  }
   public function getnom()
  {
    return $this->_nom;
  }
   public function getcouleur()
  {
    return $this->_couleur;
  }
   public function gettypee()
  {
    return $this->_typee;
  }
    public function getprix()
  {
    return $this->_prix;
  }
   public function getdateC()
  {
    return $this->_dateC;
  }

  public function ajouter($e,$conn)
  {
    $sql="INSERT INTO produit(codeProd,image,nom,couleur,typee,prix,dateC)
    values('".$e->getcodeprod()."','".$e->getimage()."','".$e->getnom()."','".$e->getcouleur()."','".$e->gettypee()."','".$e->getprix()."','".$e->getdateC()."')";
    $conn->query($sql);
  }
  public function afficher($conn)
  {
    $sql="SELECT * FROM produit";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  public function supprimer($id,$conn)
  {
    $sql="DELETE FROM  produit WHERE codeProd=".$id;
    $conn->exec($sql);
  }
  public function rechercher($codeProd,$conn){
  $sql="SELECT * FROM produit WHERE codeProd=".$codeProd;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}
 public function modifier($id,$conn)
  {
      $sql = 'UPDATE produit SET image="'.$id->getimage().'",nom="'.$id->getnom().'", couleur="'.$id->getcouleur().'",typee="'.$id->gettypee().'",prix="'.$id->getprix().'",dateC="'.$id->getdateC().'" WHERE codeProd="'.$id->getcodeprod().'"';
      $conn->exec($sql);
  }

}
 ?>
