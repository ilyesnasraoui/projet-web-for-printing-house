<?PHP
include "../config.php";
class AvisC {
function afficherAvis ($avis){
		echo "Email: ".$avis->getEmail()."<br>";
		echo "Text: ".$avis->getText()."<br>";
		echo "Etoile: ".$avis->getNote()."<br>";
		echo "date_creation: ".$avis->getDate_creation()."<br>";
	}
	function ajouterAvis($avis){
		$sql="INSERT INTO avis (id,text,note,date_creation) values (:id,:text,:note,:date_creation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$avis->getId();
        $text=$avis->getText();
        $note=$avis->getNote();
       	$date_creation=$avis->getDate_creation();
		$req->bindValue(':id',$id);
		$req->bindValue(':text',$text);
		$req->bindValue(':note',$note);
		$req->bindValue(':date_creation',$date_creation);
        $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherAviss(){
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerAvis($id){
		$sql="DELETE FROM avis where id= :id";
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
	function recupererAvis($id){
		$sql="SELECT * from avis where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	/*function modifierReclamation($reclamation,$emaill){
		$sql="UPDATE reclamation SET probleme=:probleme, autre=:autre,date_creation=:date_creationn,etat=:etat,email=:email,image=:image WHERE email=:emaill";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$probleme=$reclamation->getProbleme();
        $autre=$reclamation->getAutre();
        $date_creation=$reclamation->getDate_creation();
        $etat=$reclamation->getEtat();
        $email=$reclamation->getEmail();
        $image=$reclamation->getImage();
		$req->bindValue(':probleme',$probleme);
		$req->bindValue(':autre',$autre);
		$req->bindValue(':emaill',$emaill);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':email',$email);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':image',$image);

            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererReclamation($email){
		$sql="SELECT * from reclamation where email=$email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/

	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifhoraire=$tarif";
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
