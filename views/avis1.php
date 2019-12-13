<?PHP
include "../entities/avisE.php";
include "../core/avisC.php";

if (isset($_POST['id']) and isset($_POST['text']))
{
	
	$id=$_POST['id'];

	$datetime = date_create()->format('Y-m-d H:i:s');
	$avis1=new avis($_POST['id'],$_POST['text'],$_POST['note'],$datetime);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$avis1C=new AvisC();
$avis1C->ajouterAvis($avis1);
header('Location: avisAffichage.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>