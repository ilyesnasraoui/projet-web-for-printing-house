<?php
session_start();
include "D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php";
$f=new fonctionC();
$la=$f->getOrders();;
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
  </head>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Prods</a></li>
                            <li class="active">Orders</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Société Imprimerie Aicha De Distribution!</span></a>
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

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Order List</strong>
                    </div>

                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th class="avatar">Innovice number</th>
                                <th>Status</th>
                                <th>login</th>
                                <th>Date</th>
                                <th>Amount Due</th>
                                <th class="text-center">Edit Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $x=1;
                            foreach($la as $a)
                            {
                                echo '
                                <tr>
                                    <td class="serial">'.$x.'.</td>
                                    <td class="avatar">
                                        <form action="orderDet.php" method="post">
                                            <input type="hidden" name="add" value="'.$a["idAdd"].'">
                                            <input type="hidden" name="inno" value="'.$a["innoNumber"].'">
                                            <button class="btn-outline-dark" type="submit"># '.$a["innoNumber"].'</button>
                                        </form>
                                    </td>
                                    <td>';
                                if($a["Status"]==-1)
                                {
                                    echo '<span class="badge badge-danger">cancelled</span>';
                                }
                                else if($a["Status"]==1)
                                {
                                    echo '<span class="badge badge-complete">confirmed</span>';
                                }
                                else
                                {
                                    echo '<span class="badge badge-pending">pending</span>';
                                }
                                echo '
                                    </td>
                                    <td> '.$a["uname"].' </td>
                                    <td>  <span class="name">'.$a["OrderDate"].'</span> </td>
                                    <td> <span class="email"> '.$a["dueAmount"].'</span> </td>';
                                if ($a["Status"]==0)
                                {
                                    echo '

                                    <td>
                                    <div class="text-center">';
                                    if($a['Status']==0)
                                    {
                                        echo '<a href="" class="btn-sm btn-success" data-toggle="modal" data-target="#modalRegisterForm'.$x.$x.'">confirm</a>';
                                        echo '<a href="" class="btn-sm btn-danger" data-toggle="modal" data-target="#modalRegisterForm'.$x.'">cancel</a>';
                                    }
                                    else if($a['Status']==1)
                                    {
                                        echo '<span class="badge badge-complete">confirmed</span>';
                                    }
                                    else
                                    {
                                        echo '<span class="badge badge-danger">cancelled</span>';
                                    }

                                    echo '
                                    </div>
                                    <div class="modal fade" id="modalRegisterForm'.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Cancel Order</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="forms.php" method="post">
                                            <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                              <p class="text-center"> Innovice number </p>
                                              <input type="text" id="orangeForm-name" name="" class="form-control validate text-center" value="'.$a["innoNumber"].'" disabled>
                                            </div>
                                            <div class="md-form mb-5">
                                                <p class="text-center text-danger">Do you Really Want to cancel the order with the above innovice number</p>
                                            </div>
                                            <input type="hidden" name="inno" value="'.$a["innoNumber"].'">
                                            <input type="hidden" name="form" value="cancelOrder">
                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-danger" value="confirmOrder">
                                            <input type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" value="Cancel">

                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal fade" id="modalRegisterForm'.$x.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Confirm Order</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="forms.php" method="post">
                                            <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                              <p class="text-center"> Innovice number </p>
                                              <input type="text" id="orangeForm-name" name="" class="form-control validate text-center" value="'.$a["innoNumber"].'" disabled>
                                            </div>
                                            <div class="md-form mb-5">
                                                    <p class="text-center text-success">Do you Really Want to confirm the order with the above innovice number</p>
                                            </div>
                                            <input type="hidden" name="inno" value="'.$a["innoNumber"].'">
                                            <input type="hidden" name="form" value="confirmOrder">
                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-danger" value="Confirm">
                                            <input type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" value="Cancel">

                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </td>
                                            ';
                                }
                                echo '



                                </tr>
                                ';
                                $x++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>
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
