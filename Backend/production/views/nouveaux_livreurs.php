  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Société Imprimerie Aicha De Distribution! | </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
    <title>ajout prod</title>
  <script type="text/javascript">
    function verif()
    {
      var i=0;
      if(f1.codeProd.value=="")
      {
        alert("saisir votre code de produit");
        i--;
        return false;
      }
      if(f1.image.value=="")
      {
        alert("saisir votre image");
        i--;
        return false;
      }
      if(f1.nom.value=="")
      {
        alert("saisir votre nom");
        i--;
        return false;
      }
      if(f1.couleur.value=="")
      {
        alert("saisir votre couleur");
        i--;
        return false;
      }
      if(f1.typee.value=="")
      {
        alert("saisir votre type");
        i--;
        return false;
      }
      if(f1.dateC.value=="")
      {
        alert("saisir votre date de Creation");
        i--;
        return false;
      }
      if(i==6)
      {
        return true;
      }
    }

    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Société Imprimerie Aicha De Distribution!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">

                <h2>Fourat</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include "sidebar.php";
       ?>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Fourat
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
          <!-- top tiles -->

          <!-- /top tiles -->

             <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Afficher Produit</title>
  </head>
  <body>




    <fieldset >
 <!----------------------------------------------------------------------------------------------------------------------->
 <?php

include 'livreurC.php';
//include "extraire_donnes_livreur.php";
/*$livreur_accepte= new livreur_accepteC;
$liste_accepte=$livreur_accepte->infoLivreur();*/
$livreur = new livreurC();
$listlivreur = $livreur->afficherLivreur();




?>
<table border="2" >
    <tr><center>Demandes livreurs</center></tr>
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
<!----------------------------------------------------------------------------------------------------------------------->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                  <div class=" col-xs-20">
                <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Livreur</title>
  </head>
  <body>
    <div class=" col-xs-20">




   <fieldset >

      <form   method="POST" action="acceptlivreur.php" >
        <center><legend><h2>Ajouter Livreur</h2></legend></center>
        <table id="example1" class="table table-striped">
          <tr>
            <th> CIN </th>
            <th><input type="number" name="cin" id="cin" /></th>
          </tr>

          <tr>
            <th> Prenom </th>
            <th><input type="text" name="prenom" id="prenom" value=""/></th>
          </tr>

          <tr>
            <th> Nom </th>
            <th><input type="text" name="nom" id="nom" value=""/></th>
          </tr>
          <tr>
          <th> Telephone </th>
          <th><input type="number" name="telephone" id="telephone" value=""/></th>
        </tr>

        <tr>
            <th> Adresse </th>
            <th><input type="text" name="adresse" id="adresse" value=""/></th>
          </tr>

          <tr>
            <th> Birthday </th>
            <th><input type="date" name="birthday" id="birthday" value=""/></th>
          </tr>

          <tr>
            <th> License </th>
            <th><input type="text" name="license" id="license" value=""/></th>
          </tr>

          <tr>
            <th> License End  of validity date </th>
            <th><input type="Date" name="license_validity" id="license_validity" value=""/></th>
          </tr>

          <tr>
            <th> Joiniabilité (si oui->1 sinon->0) </th>
            <th><input type="number" name="joiniable" id="joiniable" value=""/></th>
          </tr>

          <tr>
            <th> Login </th>
            <th><input type="text" name="login" id="login" value=""/></th>
          </tr>

          <tr>
            <th> PassWord </th>
            <th><input type="PassWord" name="mdp" id="mdp" value=""/></th>
          </tr>

        </table>
        <br>
        <center>
        <td><button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Ajouter</button></td>
      </center>
      </form>



    </fieldset>

  </body>
</html>

              </div>
</div>
              <div class="title_right">

              </div>
            </div>





 <!----------------------------------------------------------------------------------------------------------------------->
    </fieldset>
  </body>
</html>

              </div>

              <div class="title_right">

              </div>
            </div>













                <!-- Start to do list -->

                <!-- End to do list -->

                <!-- start of weather widget -->

        <!-- /page content -->

        <!-- footer content -->



    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>
</html>
