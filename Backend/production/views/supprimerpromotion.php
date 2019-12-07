<?PHP
include "../core/promotionc.php";
$promotionc=new promotionc();
if (isset($_POST["id_promo"])){
	$promotionc->supprimerpromotion($_POST["id_promo"]);
	header("location:affichepromotion.php");
}

?>