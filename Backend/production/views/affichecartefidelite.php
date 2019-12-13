<?php

include '../core/cartefc.php';

$cartef = new cartefc();
$listcartef = $cartef->affichercartef();
?>

<?php
 function filterTable($query)
     {
      $connect = mysqli_connect("localhost","root","","s_i_a_d");
      $filter_Result = mysqli_query($connect,$query);
      return $filter_Result;
     }

  if (isset($_GET['search']))
{
    $valueToSearch = $_GET['valueToSearch'];
    $query="SELECT * FROM carte_fidelite WHERE  id_client LIKE '%$valueToSearch%' or id_carte LIKE '%$valueToSearch%' or points LIKE '%$valueToSearch%'";
    $search_result =filterTable($query);

}
   else {

    $query = "SELECT * FROM carte_fidelite";
    $search_result = filterTable($query);

   }



?>

<!-- ************************  !-->
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

    <link src="../../css/maps/promoo.css"  >
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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>S.I.A.D</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../img/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">

                <h2>Mohamed Ilyes Nasraoui</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

             <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
               <div class="menu_section">
                 <h3>General</h3>
                 <ul class="nav side-menu">

                     <li><a><i class="fa fa-edit"></i> Admins <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                       <li><a href="ajouterAdmin.php">Ajouter Admin</a></li>
                       <li><a href="gestionAdmins.php">Gestion Admins</a></li>
                     </ul>
                   </li>

                     <li><a><i class="fa fa-edit"></i> Clients <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                       <li><a href="TabClients.php">Afficher clients</a></li>
                     </ul>
                   </li>

                   <li><a><i class="fa fa-edit"></i> Produit <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                       <li><a href="ajoutp1.html">ajout produit</a></li>
                       <li><a href="afichprod1.php">afficher produit</a></li>
                       <li><a href="cher1.php">reglage produits produit</a></li>
                       <li><a href="stat.php">statistique produit</a></li>

                     </ul>
                   </li>

                   <li><a><i class="fa fa-edit"></i> Stock <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                       <li><a href="ajouts1.html">ajout stock</a></li>
                       <li><a href="mstock1.html">modifier stock</a></li>
                       <li><a href="sstock1.html">supprimer stock</a></li>
                       <li><a href="afichstock1.php">afficher stock</a></li>
                       <li><a href="tri1.php">trier stock</a></li>
                     </ul>
                   </li>

                   <li><a><i class="fa fa-edit"></i> Livreurs <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                       <li><a href="nouveaux_livreurs.php">Demandes livreurs </a></li>

                       </ul>
                   </li>

                   <li><a><i class="fa fa-edit"></i> Prmotion <span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                     <li><a href="ajoutpromotions.html">ajout promotion</a></li>
                     <li><a href="affichepromotion.php">afficher promotion</a></li>


                   </ul>
                 </li>

                 <li><a><i class="fa fa-edit"></i> carte fidelité <span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                     <li><a href="ajoutecartefidelite.html">ajout carte fidelité</a></li>
                     <li><a href="affichecartefidelite.php">afficher carte fidelité</a></li>


                   </ul>
                 </li>



                 <li><a><i class="fa fa-edit"></i> commande <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                     <li><a href="order.php">tous les commande</a></li>
                   </ul>
                 </li>




               </div>

             </div>
            <!-- /sidebar menu -->

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
                    <img src="images/img.jpg" alt="">Mohamed Ilyes Nasraoui
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


<form action="affichecartefidelite.php" method="get">
  <input type="text" name="valueToSearch" placeholder="value To Search"> <br><br>
  <input type="submit" name="search" value="Filtrer"><br><br>
   <table  class="table table-hover" border="3" style="margin-left:150px; margin-top: 100px; ">
    <tr>
        <td style="background-color: black;font-size: 20px;" >id_carte</td>
        <td style="background-color: black;font-size: 20px;">points</td>

        <td style="background-color: black;font-size: 20px;" >id_client</td>

        <td style="background-color: black;font-size: 20px;">Modifier</td>

        <td style="background-color: black;font-size: 20px;">supprimer</td>
        <td style="background-color: black;font-size: 20px;">telecharger un pdf </td>
    </tr>

<?php while ($row =mysqli_fetch_array($search_result,MYSQLI_NUM)):?>







        <tr>
            <td> <?php echo $row["0"]?></td>
            <td> <?php echo $row["1"]?></td>
            <td> <?php echo $row["2"]?></td>

            <td>
                <form action="modifiercartefidelite.php" method="post">
                    <input type="hidden"
                     name="id_carte" value="<?php echo $row["0"]?>">
                    <input type="hidden"  name="points" value="<?php echo $row["1"]?>">

                    <input type="hidden" name="id_client" value="<?php echo $row["2"]?>">

                    <input class="btn btn-warning"type="submit" value="modifier">
                </form>
            </td>
            <td>
                <form action="supprimercartefidelite.php" method="post">
                    <input type="hidden"  name="id_carte" value="<?php echo $row["0"]?>">
                    <input class="btn btn-danger" type="submit" value="supprimer">
                </form>
            </td>


             <td>
                <form action="testpdf.php" method="post">
                    <input type="hidden"
                     name="id_carte" value="<?php echo $row["0"]?>">
                    <input type="hidden"  name="points" value="<?php echo $row["1"]?>">

                    <input type="hidden" name="id_client" value="<?php echo $row["2"]?>">

                    <input class="btn btn-success btn-lg btn-block"type="submit" value="telecharger un pdf" >
                </form>
            </td>








        </tr>



<?php endwhile;?>
</table>
</form>


 <a href="" onclick='window.print();return false'>Imprimer le contenue du la page

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
