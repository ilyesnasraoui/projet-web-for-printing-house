<?php 
include_once "../entities/Categorie.php";
class CategorieC {

	function ajouterCategorie($P){
		$sql="insert into categorie  
		values (:id_cat,:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$req->bindValue(':id_cat',$P->getid_cat());
		$req->bindValue(':nom',$P->getnom());
            $req->execute();

           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
	}

	function afficherCategorie(){
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

	function getCategorie($ref){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie where id_cat='".$ref."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherCategories2(){
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

	function supprimerCategorie($id){
		$sql="DELETE FROM categorie where id_cat= :id";
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

	function modifierCategorie($P){
		$sql="UPDATE categorie
				SET nom=:nom

					WHERE id_cat=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$req->bindValue(':id',$P->getid_cat());
		$req->bindValue(':nom',$P->getnom());

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
}
}
?>