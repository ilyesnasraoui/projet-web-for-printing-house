  
  <?php
  require_once"../config.php";
  require_once"../core/ProduitC.php";
  $prod=new ProduitC();
  if(isset($_POST['updateID']))
  {
    $list=$prod->getProduit($_POST['updateID']);
  }

?>
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
        <?php include "sidebar.php";
        ?>

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
      <?php foreach($list as $row)
      {

        ?>
      <form name="f1" style="height: 800px;" method="POST" action="upp.php" onSubmit="return verif() " enctype="multipart/form-data" >
 <center><legend><h2> Ajout Produit </h2></legend></center>
         <table id="example1" class="table table-striped">
          
          <tr>
            <th> Image </th>
            <th><input type="file" name="image" value=""/></th>
          </tr>
          
          
          <tr>
          <th> nom </th>
          <th><input type="text" name="nom" value="<?php echo $row['nom']; ?>"/></th>
        </tr>
        
          <tr>
            <th>description</th>
            <th><textarea name="description" value="<?php echo $row['description']; ?>"/><?php echo $row['description']; ?></textarea> </th>
          </tr>
         <tr>
<td>Categorie</td>
<td><select name="idcat" >
<?php
include_once "../config.php";
include "../core/CategorieC.php";
$cat=new CategorieC();
$lst=$cat->afficherCategorie();
foreach ($lst as $rw) 
                    echo'
    <option value="'.$rw['id_cat'].'">'.$rw['nom'].'</option>'; ?>

  </select></td>
</tr>
            <th> Prix </th>
            <th><input type="number" name="prix" value="<?php echo $row['prix']; ?>"/></th>
          </tr>
          </tr>
            <th> Quantite </th>
            <th><input type="number" name="quantite" value="<?php echo $row['quantite'];} ?>"/></th>
          </tr>

          
          
       
        </table>
        <center>
          <input type="hidden" name="id_produit" value="<?php echo $_POST['updateID']; ?>">
        <td><button type="submit" name="Ajouter" value="Update" class="btn btn-danger">Update</button></td>
      </center>
      </form>
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
