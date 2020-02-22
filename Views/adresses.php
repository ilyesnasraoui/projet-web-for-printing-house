<?php
session_start ();
require_once "D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php";
require_once "D:\wamp64\www\projet\projet\Entities\addresse.php";
$a=new fonctionC();
// $uname1="YOUSSEF";
// $listA=$a->show
$listA=$a->showAdress($_SESSION['pseudo']);
$_POST['name']=$_SESSION['pseudo'];
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>s_i_a_d- My addresses</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

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

<main>
    <div class="container adresses-container" >
        <div class="row">
<?php
$x=1;
foreach ($listA as $ad)
{
echo '
        <div class="col-sm-12 col-md-4 col-12 card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="text-capitalize card-title">'.$ad["add_name"].'</h5>
                    <h6 class="text-capitalize card-subtitle mb-2 text-muted">'.$ad["name"].'</h6>
                    <p class="card-text">'.$ad["street"].', '.$ad["city"].', '.$ad["zip_code"].'</p>
                    <p class="card-text">'.$ad["state"].', '.$ad["country"].'</p>
                    <p class="card-text">'.$ad["phone"].'</p>
                    <hr>
                    <a href="#" class="card-link" data-toggle="modal" data-target="#modalRegisterForm'.$x.'"> <i class="fa fa-edit"></i> Edit Adress</a>
                    <div class="modal fade" id="modalRegisterForm'.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Edit Address</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="..\Backend\production\views\forms.php" method="post">
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-2">
                                            <label for="uname">Username</label>
                                            <input type="text" id="uname" name="pseudo" class="form-control validate" value='.$_SESSION['pseudo'].' disabled>
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="address-name">address name</label>
                                            <input type="text" id="address-name" name="address-name" class="form-control validate" value="'.$ad["add_name"].'" placeholder="Adress Name">
                                        </div>
                                        <div class="md-form mb-2">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control validate" value="'.$ad["name"].'" placeholder="First Name Last Name">
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="street">Street</label>
                                            <input type="text" id="street" name="street" class="form-control validate" value="'.$ad["street"].'" placeholder="street">
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="city">city</label>
                                            <input type="text" id="city" name="city" class="form-control validate" value="'.$ad["city"].'" placeholder="city">
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="state">state</label>
                                            <select class="form-control" name="state" id="state">
                                                <option value="Tunis"';if($ad["state"]=="Tunis"){echo "selected";};echo'>Tunis</option>
                                                <option value="Ariana"';if($ad["state"]=="Ariana"){echo "selected";};echo'>Ariana</option>
                                                <option value="Ben Arous"';if($ad["state"]=="Ben Arous"){echo "selected";};echo'>Ben Arous</option>
                                                <option value="Manouba"';if($ad["state"]=="Manouba"){echo "selected";};echo'>Manouba</option>
                                                <option value="Nabeul"';if($ad["state"]=="Nabeul"){echo " selected";};echo'>Nabeul</option>
                                                <option value="Zaghouan"';if($ad["state"]=="Zaghouan"){echo "selected";};echo'>Zaghouan</option>
                                                <option value="Bizerte"';if($ad["state"]=="Bizerte"){echo "selected";};echo'>Bizerte</option>
                                                <option value="Beja"';if($ad["state"]=="Beja"){echo "selected";};echo'>Beja</option>
                                                <option value="Jandouba"';if($ad["state"]=="Jandouba"){echo "selected";};echo'>Jandouba</option>
                                                <option value="Kef"';if($ad["state"]=="Kef"){echo "selected";};echo'>Kef</option>
                                                <option value="Siliana"';if($ad["state"]=="Siliana"){echo "selected";};echo'>Siliana</option>
                                                <option value="Sousse"';if($ad["state"]=="Sousse"){echo "selected";};echo'>Sousse</option>
                                                <option value="Monastir"';if($ad["state"]=="Monastir"){echo "selected";};echo'>Monastir</option>
                                                <option value="Mahdia"';if($ad["state"]=="Mahdia"){echo "selected";};echo'>Mahdia</option>
                                                <option value="Sfax"';if($ad["state"]=="Sfax"){echo "selected";};echo'>Sfax</option>
                                                <option value="Kairouan"';if($ad["state"]=="Kairouan"){echo "selected";};echo'>Kairouan</option>
                                                <option value="Kasserin"';if($ad["state"]=="Kasserin"){echo "selected";};echo'>Kasserin</option>
                                                <option value="Sidi Bouzid"';if($ad["state"]=="Sidi Bouzid"){echo "selected";};echo'>Sidi Bouzid</option>
                                                <option value="Gabes"';if($ad["state"]=="Gabes"){echo "selected";};echo'>Gabes</option>
                                                <option value="Mednin"';if($ad["state"]=="Mednin"){echo "selected";};echo'>Mednin</option>
                                                <option value="Tataouine"';if($ad["state"]=="Tataouine"){echo "selected";};echo'>Tataouine</option>
                                                <option value="Gafsa"';if($ad["state"]=="Gafsa"){echo "selected";};echo'>Gafsa</option>
                                                <option value="Touzeur"';if($ad["state"]=="Touzeur"){echo "selected";};echo'>Touzeur</option>
                                                <option value="Kebili"';if($ad["state"]=="Kebili"){echo "selected";};echo'>Kebili</option>
                                            </select>
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="zip">zip</label>
                                            <input type="text" id="zip" name="zip" class="form-control validate" value="'.$ad["zip_code"].'" placeholder="zip">
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="Country">Country</label>
                                            <input type="text" id="Country" name="Country" class="form-control validate" value="Tunisia" placeholder="Country" disabled>
                                        </div>
                                        <div class="md-form mb-2">
                                            <label class="text-capitalize" for="phone">phone number</label>
                                            <input type="text" id="phone" name="phone" class="form-control validate" value="'.$ad["phone"].'" placeholder="phone number">
                                        </div>
                                        <input type="hidden" name="add_id" value="'.$ad["add_id"].'">
                                        <input type="hidden" name="form" value="editAdd">
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <input type="submit" class="btn btn-outline-success" value="Confirm Changes">
                                        <input type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close" value="Cancel">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="card-link" data-toggle="modal" data-target="#modalRegisterForm'.$x.$x.'"> <i class="fa fa-minus"></i> Delete Adress</a>
                    <div class="modal fade" id="modalRegisterForm'.$x.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Delete Address</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="..\Backend\production\views\forms.php" method="post">
                                            <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                              <p class="text-center"> Address Name </p>
                                              <input type="text" id="orangeForm-name" name="" class="form-control validate" value="'.$ad["add_name"].'" disabled>
                                            </div>
                                            <div class="md-form mb-5">
                                              <p class="text-center text-danger">Do you Really Want to delete the above address</p>
                                            </div>
                                            <input type="hidden" name="add_id" value="'.$ad["add_id"].'">
                                            <input type="hidden" name="form" value="deleteAdd">
                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-danger" value="Confirm">
                                            <input type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" value="Cancel">

                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                </div>
            </div>

';
$x++;
}
?>
         </div>
        <div class="" style="margin-top: 10px;">
            <a href="" data-toggle="modal" data-target="#add-address"><i class="fa fa-home"></i> add address</a>
        </div>
        <div class="modal fade" id="add-address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Add Address</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="..\Backend\production\views\forms.php" method="post">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-2">
                                <label for="uname">Username</label>
                                <input type="text" id="uname" name="" class="form-control validate" value="<?php echo $_SESSION['pseudo']; ?>" disabled>
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="address-name">address name</label>
                                <input type="text" id="address-name" name="address-name" class="form-control validate" value="" placeholder="Adress Name">
                            </div>
                            <div class="md-form mb-2">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control validate" value="" placeholder="First Name Last Name">
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="street">Street</label>
                                <input type="text" id="street" name="street" class="form-control validate" value="" placeholder="street">
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="city">city</label>
                                <input type="text" id="city" name="city" class="form-control validate" value="" placeholder="city">
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="state">state</label>
                                <select class="form-control"  name="state" id="state">
                                    <option value="Tunis">Tunis</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="Ben Arous">Ben Arous</option>
                                    <option value="Manouba">Manouba</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Zaghouan">Zaghouan</option>
                                    <option value="Bizerte">Bizerte</option>
                                    <option value="Beja">Beja</option>
                                    <option value="Jandouba">Jandouba</option>
                                    <option value="Kef">Kef</option>
                                    <option value="Siliana">Siliana</option>
                                    <option value="Sousse">Sousse</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Mahdia">Mahdia</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Kairouan">Kairouan</option>
                                    <option value="Kasserin">Kasserin</option>
                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                    <option value="Gabes">Gabes</option>
                                    <option value="Mednin">Mednin</option>
                                    <option value="Tataouine">Tataouine</option>
                                    <option value="Gafsa">Gafsa</option>
                                    <option value="Touzeur">Touzeur</option>
                                    <option value="Kebili">Kebili</option>
                                </select>
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="zip">zip</label>
                                <input type="text" id="zip" name="zip" class="form-control validate" value="" placeholder="zip">
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="Country">Country</label>
                                <input type="text" id="Country" name="Country" class="form-control validate" value="Tunisia" placeholder="Country" disabled>
                            </div>
                            <div class="md-form mb-2">
                                <label class="text-capitalize" for="phone">phone number</label>
                                <input type="text" id="phone" name="phone" class="form-control validate" value="" placeholder="phone number">
                            </div>
                            <input type="hidden" name="uname" value="<?php echo $_SESSION['pseudo']; ?>">
                            <input type="hidden" name="form" value="addAdd">
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <input type="submit" class="btn btn-outline-success" value="Add">
                            <input type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close" value="Cancel">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
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
