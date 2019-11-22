<?PHP
include "../core/ReclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["id"])){
	$reclamationC->SupprimerRec($_POST["id"]);
	header('Location: AfficherRec.php');
}
else
{
	echo "dsffsqfqlbsdfldq";
}
?>