<?PHP
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["autre"])){
	$reclamationC->supprimerReclamation($_POST["autre"]);
	header('Location: reclamationAffichage.php');
}

?>