<!DOCTYPE html>
<html>
<head>
	<title>espace livreur</title>
</head>
<body >
	<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']) && isset($_SESSION['c']) &&isset($_SESSION['j'])) 
{ 

	 echo 'Votre login est <b>'.$_SESSION['l'].'</b> Votre CIN est <b>'.$_SESSION['c'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['p'].
	'</b><br> Identifiant de la session est :'.session_id().'</br>';
	
	echo '<br><a href="./logout.php">Cliquer pour se déconnecter</a>';

	?>
	<!DOCTYPE html>
<html>
<head>
	<title>espace livreur</title>
</head>
<body style="color: grey,">
	<h1>Liste de livraisons</h1>
	<div>
		 <?php

include 'livraisonC.php';

$livraison = new livraisonC();
$listlivreur = $livraison->afficherLivraison();

  


?>
<table border="2">
    <tr>
        <td>Id livraison</td>
        <td>Id commande</td>
        <td>Date livraison</td>
        <td>supprimer</td>
        
    </tr>
<?php

foreach ($listlivreur as $row)
{
    echo '
        <tr>
            <td>'.$row["id_livraison"].'</td>
            <td>'.$row["id_commande"].'</td>
            <td>'.$row["date_livraison"].'</td>
            

            <td> 
                <form action="supplivraison.php" method="post">
                    <input type="hidden" id="id_livraison" name="id_livraison" value="'.$row["id_livraison"].'">
                    <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="supprimer">
                </form>
            </td>
        </tr>
    ';
}
echo'
</table>
	</div>
	<br>
	<br>
	
	<form method="post" action="modifierLivreur.php">
			<input type="hidden" id="cin" name="cin" value="'.$_SESSION['c'].'">
			<input type="hidden" id="joiniable" name="joiniable" value="'.$_SESSION['j'].'">
		<button>joiniabilité</button>
	</form>
</body>
</html>
'
?>

	<?php  
}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="login_livreur.php">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>

</body>
</html>
