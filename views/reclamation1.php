<?PHP
include "../entities/reclamationE.php";
include "../core/reclamationC.php";
session_start();
if (isset($_POST['probleme']) and isset($_POST['email']))
{
	$target="image/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	$email=$_POST['email'];

	$datetime = date_create()->format('Y-m-d H:i:s');
	$reclamation1=new reclamation($_POST['probleme'],$_POST['autre'],$datetime,"non traitée",$_POST['email'],$image,true,$_SESSION['username'],"");
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);

/*require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = true;
$mail->Debugoutput='html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 25;
$mail->isHTML(true);
$mail->Username = "skan.baccouche@gmail.com"; //hedha l mail ili bcih tab3eth bih inty 
$mail->Password = "Arekusanda1"; //mdp l mail mte3ik 
$mail->setFrom("skan.baccouche@gmail.com"); //nafss l mail mte3ik t3awdou 
$mail->Subject = "Réclamation"; //sujet mta3 l mail mte3ik
$mail->Body= "Nous avons reçue votre réclamation et nous allons la traiter dans les plus brefs délais ";
$mail->AltBody ="Nous avons reçue votre réclamation et nous allons la traiter dans les plus brefs délais "; //ikteb ili t7eb
$mail->AddAddress($email); // lmail mta3 l 3abed ili bich tab3athlou 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//var_dump($mail);
if (!$mail->send()) 
	{ 
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else
	{


    ?>
        <script>
        Javascript:alert('Mail sent !');
        </script>
       	<?php
    }*/
header('Location: reclamationAffichage.php');
	
}else{
	echo "vérifier les champs";
}
//*/






?>