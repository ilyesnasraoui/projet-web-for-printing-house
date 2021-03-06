<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Login</title>
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
   if ($_SESSION['pseudo'] != null){
      include "header2.php";}
      else
          { include "header.php";}
      ?>
	<!--================ End Header Menu Area =================-->

  <!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Join us!</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

  <!--================Login Box Area =================-->
	<center><section class="login_box_area section-margin">
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Sign Up</h3>
						<form class="row login_form"  id="register_form" method="POST" action="ajoutLivreur.php" onsubmit="return controle()" >
						<!------------------------------------------------------------------------------------------------------->
            <!------------------------------------------------------------------------------------------------------->
             <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Last name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'lastname'">
              </div>
              <div id="erreur3" style="color: red"></div>


              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="First name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'firstname'">
              </div>
              <div id="erreur2" style="color: red"></div>




              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="cin" name="cin" placeholder="CIN" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CIN'">
              </div>
              <div id="erreur1" style="color: red"></div>

              <div class="col-md-12 form-group">
                <div  class="form-control" style="color:grey;font-size:16px; border: 0">Birthday:</div>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Birthday'">
              </div>
             <!-- <div id="erreur" style="color: red"></div>-->



              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'telephone'">
              </div>
              <div id="erreur4" style="color: red"></div>


              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse'">
              </div>
              <div id="erreur6" style="color: red"></div>






              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="license" name="license" placeholder="License code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'License code'">
              </div>
              <div id="erreur5" style="color: red"></div>




              <div class="col-md-12 form-group">
                <div  class="form-control" style="color:grey;font-size:16px; border: 0">License end of validity date: </div>
                <input type="date" class="form-control" id="license_validity" name="license_validity" placeholder="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'">
              </div>




              <!------------------------------------------------------------------------------------------------------->
              <!------------------------------------------------------------------------------------------------------->
							<div class="col-md-12 form-group">
								<div class="creat_account">

								</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" value="Register" class="button button-register w-100">
							</div>

						</form>
            <script src="controle.js"></script>
					</div>
				</div>
			</div>
		</div>
	</section></center>
	<!--================End Login Box Area =================-->



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
