<?PHP
include "../core/cartefc.php";
$cartefc=new cartefc();
if (isset($_POST["id_carte"])){
	$cartefc->supprimercartef($_POST["id_carte"]);
	header("location:affichecartefidelite.php");
}

?>