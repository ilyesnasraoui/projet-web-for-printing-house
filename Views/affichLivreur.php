<?php

include 'livreurC.php';
$livreur = new livreurC();
$listlivreur = $livreur->afficherLivreur();
?>
<table border="2">
    <tr>
        <td>CIN</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Date Naissance</td>
        <td>telephone</td>
        <td>license</td>
        <td>license_validity</td>
        <td>adresse</td>
        <td>supprimer</td>
    </tr>
<?php

foreach ($listlivreur as $row)
{
    echo '
        <tr>
            <td>'.$row["cin"].'</td>
            <td>'.$row["nom"].'</td>
            <td>'.$row["prenom"].'</td>
            <td>'.$row["birthday"].'</td>
            <td>'.$row["telephone"].'</td>
            <td>'.$row["license"].'</td>
            <td>'.$row["license_validity"].'</td>
            <td>'.$row["adresse"].'</td>
            <td> 
                <form action="suppLivreur.php" method="post">
                    <input type="hidden" id="cin" name="cin" value="'.$row["cin"].'">
                    <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="supprimer">
                </form>
            </td>
        </tr>
    ';
}
?>
</table>
