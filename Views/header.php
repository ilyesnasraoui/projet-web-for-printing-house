<?php
include_once "../config.php";
include "../core/CategorieC.php";
$cat=new CategorieC();
$lst=$cat->afficherCategorie();

?>
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" style="height: 100px"></a>
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo2.png" alt="" style="height: 50px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="Promotions.html">Promotions</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <?php
                  foreach ($lst as $rw)
                    echo'
                  <li class="nav-item"><a class="nav-link" href="produit.php?ID_Cat='.$rw['id_cat'].'">'.$rw['nom'].'</a></li>';

                  ?>
                  <li class="nav-item"><a class="nav-link" href="produit.php">All Products</a></li>

                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button> <a href="cart.php"> <i class="ti-shopping-cart"></i><span class="nav-shop__circle"></span></button></a> </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>