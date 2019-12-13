<?php
include "../config.php";
session_start();
$bdd = config::getConnexion();
include_once ('cookieconnect.php');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membre SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: userProfile.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membre SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: userProfile.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membre SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: userProfile.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
   if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE membre SET avatar = :avatar WHERE id = :id');
            $updateavatar->execute(array(
               'avatar' => $_SESSION['id'].".".$extensionUpload,
               'id' => $_SESSION['id']

               ));
            header('Location: userProfile.php?id='.$_SESSION['id']);
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>S.I.A.D- Edit Profile</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
    <?php
  if (isset($_SESSION['pseudo'])){
     include "header2.php";}
     else
         { include "header.php";}
     ?>
  <!--================ End Header Menu Area =================-->
<div class="login_form_inner register_form_inner">
                  <h3>EDIT PROFILE</h3>
         <div align="left">
            <form class="row login_form"   method="post" enctype="multipart/form-data">
              <div class="col-md-12 form-group">
               <input type="text" class="form-control" id="pseudo" name="newpseudo"  placeholder="Pseudo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pseudo'" value="<?php echo $user['pseudo']; ?>">
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="mail" name="newmail" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="<?php echo $user['mail']; ?>">
              </div>
              <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="mdp" name="newmdp1" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
              <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="mdp2" name="newmdp2" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
               </div>
               <div class="col-md-12 form-group">
                <label> Avatar: </label>
                <input type="file" class="form-control"  name="avatar">
               </div>
              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="button button-register w-100"  >Submit</button>
              </div>
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php
}
else {
   header("Location: connexion.php");
}
?>


  <!--================ Start footer Area  =================-->
  <footer class="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="col-lg-3 col-md-6 col-sm-6">

          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">

          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">

          </div>
          <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Contact Us</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fa fa-location-arrow"></span>
                  Head Office
                </p>
                <p>AV habib borguiba, Grombalia</p>

                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  Phone Number
                </p>
                <p>
                  +216 72 211 611 <br>
                  +216 98 319 629
                </p>

                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>
                  impaicha96@yahoo.fr <br>

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row d-flex">
          <p class="col-lg-12 footer-text text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
