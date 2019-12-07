<?php 
include_once "../entities/Cathegorie.php";
class ProduitC {

	function ajouterProduit($P){
		$sql="insert into categorie  
		values (' ',:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$req->bindValue(':nom',$P->getnom());
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
	}

	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie ";
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
		$sql="SElECT nom From categorie";
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
		$sql="DELETE FROM categorie where id_categorie= :id";
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

					WHERE id_categorie=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		
		$req->bindValue(':id',$P->getid());
		$req->bindValue(':nom',$P->getnom());

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
}
?>