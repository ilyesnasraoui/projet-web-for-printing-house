<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';

$c=new Database();
$conn=$c->connexion();
$user=new User($conn,$_POST['login'],$_POST['pwd']);
$u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);

$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['login']==$_POST['login'] && $t['mdp']==$_POST['pwd']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['c']=$t['cin'];
		$_SESSION['j']=$t['joiniable'];
		header("location:page_membre.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login_livreur.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login_livreur.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>