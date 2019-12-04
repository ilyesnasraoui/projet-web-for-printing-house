<?php

    $cin=$_POST["cin"];
    $joiniable=$_POST["joiniable"];
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier joiniabilité</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>modifier livreur</h1>
<form  method="post" action="mod.php" >
    <table>
        <tr>
            <td><label for="cin">CIN</label></td>
            <td><input type="text"  value="<?php echo $cin ?>" disabled></td>
            <td><input type="hidden" id="cin" name="cin" value="<?php echo $cin ?>"></td>
        </tr>
        <tr>
            <td><label for="nom">Joiniabilité(si oui->1 sinon->0)</label></td>
            <td><input type="number" id="joiniable" name="joiniable" value="<?php echo $joiniable ?>"></td>
        </tr>
        
        <tr>
            <td><input type="submit" value="Modifier"></td>
        </tr>
    </table>
</form>
</body>
</html>