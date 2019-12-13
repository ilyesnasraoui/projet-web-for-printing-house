<?php
include_once "../config.php";
include "../core/CategorieC.php";
$cat=new CategorieC();
$lst=$cat->afficherCategorie();
require_once "D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php";
$i= new fonctionC();
$c=$i->getCart(getHostByName(getHostName()));
$bdd = config::getConnexion();
$getid = $_SESSION['id'];
$requser = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();
?>


<header class="header_area">
   <div class="main_menu">
     <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
         <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" style="height: 100px"></a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
           <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
             <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="Promotions.php">Promotions</a></li>
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
                 aria-expanded="false">gerer commande</a>
               <ul class="dropdown-menu">

                 <li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
                 <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
                 <li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>
                 <li class="nav-item"><a class="nav-link" href="adresses.php">My adresses</a></li>
               </ul>
             </li>

             <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
           </ul>

           <ul class="nav-shop">
             <li class="nav-item"><button><i class="ti-search"></i></button></li>
             <li class="nav-item"><button> <a href="cart.php"> <i class="ti-shopping-cart"></i><span class="nav-shop__circle"></span><?php echo $c->rowCount() ?></button></a> </li>
           </ul>
         </div>
        <li class="nav-item submenu dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false"><img  src="membres/avatars/<?php echo $userinfo['avatar']; ?>" width="60" style="float: right; margin:0 0px 0 0px; " ></a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="nav-link" href="edit.php">Edit profile</a></li>
                 <li class="nav-item"><a class="nav-link" href="deconnexion.php">Log out</a></li>
               </ul>
             </li>
       </div>
     </nav>
   </div>
 </header>
