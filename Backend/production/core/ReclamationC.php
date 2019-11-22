<?PHP
include "../config.php";

class ReclamationC {

	function AjouterRc($reclamation ){
		$sql="insert into reclamation (mail,probleme,etat,date,message,image) values (:mail,:probleme,:etat,:date,:message,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$mail=$reclamation->get_email();
        $etat=$reclamation->get_etat();
        $message=$reclamation->get_message();
        $daterc=$reclamation->get_date();
        $prob=$reclamation->get_prob();
        $image=$reclamation->get_image();
		$req->bindValue(':mail',$mail);
		$req->bindValue(':probleme',$prob);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':date',$daterc);
		$req->bindValue(':message',$message);
		$req->bindValue(':message',$message);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function Mailing($da,$prob,$mail)
	{
		ini_set('smtp_port', 587);
	     $header="MIME-Version: 1.0\r\n";
		 $header.='From:"Bijoutrie Imed"<Casasport.tn>'."\n";
		 $header.='Content-Type:text/html; charset="uft-8"'."\n";
		 $header.='Content-Transfer-Encoding: 8bit';
		 $message="Cher Monsieur, Madame, <br> Nous avons bien pris en compte votre reclamation du $da <br> a propos de votre problemeune $prob <br> une reponse vous sera envoyer dans les brefs délais  ";
		 mail($mail, "Reclamation !", $message, $header);
	}
		function Mailingvalider($da,$prob,$mail)
	{
		ini_set('smtp_port', 587);
	     $header="MIME-Version: 1.0\r\n";
		 $header.='From:"Bijoutrie Imed"<Casasport.tn>'."\n";
		 $header.='Content-Type:text/html; charset="uft-8"'."\n";
		 $header.='Content-Transfer-Encoding: 8bit';
		 $message="Cher Monsieur, Madame, <br> Nous vous informons que votre reclamation du $da <br> a propos de votre problemeune $prob <br> Apres consultation a eu une reponse favorable  d autres information vous serons communiquer ulterierment ";
		 mail($mail, "Reclamation !", $message, $header);
	}
	function Mailingnonvalider($da,$prob,$mail)
	{
		ini_set('smtp_port', 587);
	     $header="MIME-Version: 1.0\r\n";
		 $header.='From:"Bijoutrie Imed"<Casasport.tn>'."\n";
		 $header.='Content-Type:text/html; charset="uft-8"'."\n";
		 $header.='Content-Transfer-Encoding: 8bit';
		 $message="Cher Monsieur, Madame, <br> Nous vous informons que votre reclamation du $da <br> a propos de votre problemeune $prob <br> Apres consultation a eu une reponse defavorable ";
		 mail($mail, "Reclamation !", $message, $header);
	}
	
	function AfficherRec(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function AffichermailRec($var){
        
		$sql="SElECT * From reclamation where mail='$var' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);

		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimerRec($id){
		$sql="DELETE FROM reclamation where id= :id";
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

	function ModifierRec($id)
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

/*---------------------------------calcule simple---------------------------------------------------*/
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

function prob()
{
	try{
        $c =new Config();
		$driver = $c->getConnexion();
		$stmt = $driver->prepare("SELECT COUNT(*) as te FROM reclamation ");
		$stmt->execute();
		$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $l['0']['te'];}
	catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
	}

}
/*---------------------------------calcule simple---------------------------------------------------*/

/*---------------------------------calcule simple %---------------------------------------------------*/
function probliveraison100()
{
	$x=new ReclamationC();
	return ($x->probliveraison()*100)/$x->prob();
}

function probautre100()
{
	$x=new ReclamationC();
	return ($x->probautre()*100)/$x->prob();
}
function probproduit100()
{
	$x=new ReclamationC();
	return ($x->probproduit()*100)/$x->prob();
}
function probmanquant100()
{
	$x=new ReclamationC();
	return ($x->probmanquant()*100)/$x->prob();
}
function probsite100()
{
	$x=new ReclamationC();
	return ($x->probsite()*100)/$x->prob();
}
/*---------------------------------calcule simple %---------------------------------------------------*/


	/*--------------------Fonction stat-----------------------------*/

	

		function RecupererRec($id){
		$sql="select * from reclamation where id='$id'";
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
