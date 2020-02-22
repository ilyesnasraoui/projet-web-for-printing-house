<?PHP
include "../config.php";
class ReclamationC {
function afficherReclamation ($reclamation){
		echo "probleme: ".$reclamation->getProbleme()."<br>";
		echo "autre: ".$reclamation->getAutre()."<br>";
		echo "date_creation: ".$reclamation->getDate_creation()."<br>";
		echo "email: ".$reclamation->getEmail()."<br>";
	}
	function ajouterReclamation($reclamation){
		$sql="INSERT INTO reclamation (probleme,autre,date_creation,email,etat) values (:probleme,:autre,:date_creation,:email,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $probleme=$reclamation->getProbleme();
        $autre=$reclamation->getAutre();
        $date_creation=$reclamation->getDate_creation();
        $email=$reclamation->getEmail();
		$req->bindValue(':probleme',$probleme);
		$req->bindValue(':autre',$autre);
		$req->bindValue(':date_creation',$date_creation);
		$req->bindValue(':email',$email);
		$req->bindValue(':etat',0);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherReclamations(){
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
	function afficherReclamationsuser($email){
		$sql="SElECT * From reclamation WHERE email='$email'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerReclamation($autre){
		$sql="DELETE FROM reclamation where autre= :autre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':autre',$autre);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$emaill){
		$sql="UPDATE reclamation SET probleme=:probleme, autre=:autre,date_creation=:date_creation,email=:email WHERE email=:emaill";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$probleme=$reclamation->getProbleme();
        $autre=$reclamation->getAutre();
        $date_creation=$reclamation->getDate_creation();
        $email=$reclamation->getEmail();
		$req->bindValue(':probleme',$probleme);
		$req->bindValue(':autre',$autre);
		$req->bindValue(':emaill',$emaill);
		$req->bindValue(':email',$email);
		$req->bindValue(':date_creation',$date_creation);

            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }

	}
	function recupererReclamation($emaill){
		$sql="SELECT * FROM reclamation WHERE email='$emaill'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function calculerReclamation($probleme){
		$sql="SELECT * FROM reclamation where probleme='$probleme'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$nombre=$liste->rowCount();
		return $nombre;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

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
