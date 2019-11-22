

<!DOCTYPE html>
<html>
<head>

<form method="POST" action="TraiterRec.php" >
<?php 
include "../core/ReclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["id"])){
	$reclamationC->RecupererRec($_POST["id"]);
	$reclamation1C= $reclamationC->RecupererRec($_POST["id"]);
		foreach($reclamation1C as $row){
		$id=$row['id'];
		$mail=$row['mail'];
		$probleme=$row['probleme'];
		$date=$row['date'];
		$etat=$row['etat'];}
		echo $id." "." ".$mail." ".$probleme." ".$date." ".$etat;
		}
else
{
  echo "Errrrrrrrrrrrrrreur";
}


 ?>

<input type="submit" name="traiter" value="Traiter" >
 <input type="hidden" value="<?PHP echo $row['id'] ; ?>" name="id">
</form>
</body>
</html>


