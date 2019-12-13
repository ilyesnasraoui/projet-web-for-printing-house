<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";
$utilisateur1C=new utilisateurCore();
if (isset($_POST["ref"])){
	$utilisateur1C->SupprimerAdmin($_POST["ref"]);
	header('Location: gestionAdmins.php'); //redirection
}

?>