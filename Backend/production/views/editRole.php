<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";
$bdd = config::getConnexion();
$utilisateur1C=new utilisateurCore();
$admin=1;
$superadmin=2;
if ((isset($_POST["ref"])) AND ($_POST["role"]==1)){
	$role = $bdd->prepare("UPDATE membre SET role = ? WHERE id = ?");
    $role->execute(array($superadmin, $_POST["ref"]));
    }
     else {
       	$role = $bdd->prepare("UPDATE membre SET role = ? WHERE id = ?");
         $role->execute(array($admin, $_POST["ref"]));
     }       
	header('Location: gestionAdmins.php'); //redirection


?>