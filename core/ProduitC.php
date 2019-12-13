<?php 
include_once "../entities/Produit.php";
class ProduitC {

	function ajouterProduit($P){
		$sql="insert into produits  
		values ('',:nom,:prix,:description,:quantite,:type,:id_cat,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$req->bindValue(':nom',$P->getnom());
		$req->bindValue(':description',$P->getdesc());
		$req->bindValue(':prix',$P->getprix());
		$req->bindValue(':id_cat',$P->getid_cat());
		$req->bindValue(':type',$P->gettype());
		$req->bindValue(':quantite',$P->getquantite());
		$req->bindValue(':image',$P->getimage());
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
	}

	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function countProd()
  {
    $sql="SElECT count(*)count From produit ORDER BY prix";
    $db = config::getConnexion();
    try
      {
    $liste=$db->query($sql);
    return $liste;
      }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        } 
  }
  function countProd_Cat($id)
  {
    $sql="SElECT count(*)count From produit where id_categorie=".$id;
    $db = config::getConnexion();
    try
      {
    $liste=$db->query($sql);
    return $liste;
      }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        } 
  }

	function afficherProduits_Cat($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits WHERE fk_id_categorie= ".$id." ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduits_Cat_kword($id,$kword){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits WHERE fk_id_categorie= ".$id." and nom LIKE '".$kword."%' ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduits_kword($kword){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits WHERE nom LIKE '".$kword."%' ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduits2(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT id_produit,nom,desc From produits ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function getProduit($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits WHERE id_produit='".$id."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerProduit($id){
		$sql="DELETE FROM produits where id_produit= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierProduit($P){
		$sql="UPDATE produits 
				SET nom=:nom,
					description=:description,
					prix=:prix,
					fk_id_categorie=:categorie,
					type:=:type,
					quantite=:quantite,
					image=:image

					WHERE id_produit=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		        $req=$db->prepare($sql);
		$req->bindValue(':id',$P->getid_produit());
		$req->bindValue(':nom',$P->getnom());
		$req->bindValue(':description',$P->getdesc());
		$req->bindValue(':prix',$P->getprix());
		$req->bindValue(':categorie',$P->getid_cat());
		$req->bindValue(':type',$P->gettype());
		$req->bindValue(':quantite',$P->getquantite());
		$req->bindValue(':image',$P->getimage());

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
}
}
?>