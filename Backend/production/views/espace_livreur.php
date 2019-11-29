<!DOCTYPE html>
<html>
<head>
	<title>espace livreur</title>
</head>
<body>
	<h1>Liste de livraison</h1>
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
?>
</table>
	</div>
</body>
</html>