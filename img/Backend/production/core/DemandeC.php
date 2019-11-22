<?PHP
include "../config.php";

class DemandeC {

	function AjouterD($reclamation ){
		$sql="insert into demande (mail,type,message,etat,date) values (:mail,:type,:message,:etat,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$mail=$reclamation->get_email();
        $etat=$reclamation->get_etat();
        $message=$reclamation->get_message();
        $daterc=$reclamation->get_date();
        $prob=$reclamation->get_type();
		$req->bindValue(':mail',$mail);
		$req->bindValue(':type',$prob);
		$req->bindValue(':message',$message);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':date',$daterc);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherD(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From demande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function AffichermailD($var){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From demande where mail='$var'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimerD($id){
		$sql="DELETE FROM demande where id= :id";
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

	function ModifierD($id)
	{
		$sql="UPDATE reclamation SET etat=1 WHERE id=:id";
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
/*--------------------Fonction stat-----------------------------*/
	function probliveraison()
	{

	try{
                $c =new Config();
				$driver = $c->getConnexion();
				$stmt = $driver->prepare("SELECT COUNT(*) as te FROM reclamation WHERE probleme='Produit livre non commande'");
				$stmt->execute();
			 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
			 	return $l['0']['te'];
			}catch(PDOException $ex){
				echo "Erreur: ".$ex->getMessage();
	}
   }
		function probproduit()
	{

	try{
                $c =new Config();
				$driver = $c->getConnexion();
				$stmt = $driver->prepare("SELECT COUNT(*) as te FROM reclamation WHERE probleme='Produit endommage ou casse'");
				$stmt->execute();
			 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
			 	return $l['0']['te'];
			}catch(PDOException $ex){
				echo "Erreur: ".$ex->getMessage();
	}
}
		function probmanquant()
	{

	try{
                $c =new Config();
				$driver = $c->getConnexion();
				$stmt = $driver->prepare("SELECT COUNT(*) as te FROM reclamation WHERE probleme='Produit Manquant a la livraison'");
				$stmt->execute();
			 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
			 	return $l['0']['te'];
			}catch(PDOException $ex){
				echo "Erreur: ".$ex->getMessage();
	}
}
		function probsite()
	{

	try{
                $c =new Config();
				$driver = $c->getConnexion();
				$stmt = $driver->prepare("SELECT COUNT(*) as te FROM reclamation WHERE probleme='Information erronee dans le catalogue ou sur le site web'");
				$stmt->execute();
			 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
			 	return $l['0']['te'];
			}catch(PDOException $ex){
				echo "Erreur: ".$ex->getMessage();
	}
}
		function probautre()
	{

	try{
        $c =new Config();
		$driver = $c->getConnexion();
		$stmt = $driver->prepare("SELECT COUNT(*) as te FROM reclamation WHERE probleme != 'Produit endommage ou casse' AND probleme != 'Produit Manquant a la livraison' AND probleme !='Produit livre non commande' AND probleme !='Information erronee dans le catalogue ou sur le site web'");
		$stmt->execute();
		$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $l['0']['te'];}
	catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
	}
}

	/*--------------------Fonction stat-----------------------------*/

	

		function RecupererD($id){
		$sql="SELECT * from demande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	/*
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>
