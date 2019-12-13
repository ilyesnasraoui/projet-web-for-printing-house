<?php
 require_once 'D:\wamp64\www\projet\projet\Entities\panier.php';
require_once  'D:\wamp64\www\projet\projet\Entities\commande.php';
require_once 'D:\wamp64\www\projet\projet\Entities\utilisateur.php';
require_once 'D:\wamp64\www\projet\projet\Entities\addresse.php';
require_once 'D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php';
if($_POST["form"]=="addCart")
{
    if (isset($_POST["pId"]))
    {
        $u=new fonctionC();
        $u->ajouterPanier($_POST["pId"]);
        header("location:D:/wamp64/www/projet/projet/views/produit.php");
    }
    else
    {
        echo "ccacac";
    }
}
else if($_POST["form"]=="deleteCart")
{
    if (isset($_POST["pId"]))
    {
        $u=new fonctionC();
        $u->deleteCart($_POST["pId"]);
      header("location:D:/wamp64/www/projet/projet/views/produit.php");
    }
    else
    {
        echo "ccacac";
    }
}
else if($_POST["form"]=="updateCart")
{
    if(isset($_POST["pId"]) and  isset($_POST["qty"]))
    {
        $u=new fonctionC();
        $u->updateCart($_POST["pId"],$_POST["qty"]);
    }
    else
    {
        echo "ccacac";
    }
}
else if($_POST["form"]=="addOrder")
{
      if(isset($_POST["uname"]) and isset($_POST["addId"]))
      {
        $f=new fonctionC();
        $f->addFromCart($_POST["uname"],$_POST["addId"]);
          header("location:../../../views/orders.php");
    }
}
else if($_POST["form"]=="confirmOrder")
{
    if(isset($_POST["inno"]))
    {
        $f=new fonctionC();
        $f->confirmOrder($_POST["inno"]);
        header("location:../views/order.php");
    }
}
else if($_POST["form"]=="cancelOrder")
{
    if(isset($_POST["inno"]))
    {
        $f=new fonctionC();
        $f->cancelOrder($_POST["inno"]);
        header("location:../views/order.php");
    }
}
else if ($_POST["form"]=="addAdd")
{
    if (isset($_POST['address-name']) and isset($_POST['name']) and isset($_POST['street']) and isset($_POST['city']) and isset($_POST['state']) and isset($_POST['zip']) and isset($_POST['phone']) and isset($_POST['uname']))
    {
        $add=new address($_POST['uname'],$_POST['address-name'],$_POST['name'],$_POST['street'],$_POST['city'],$_POST['zip'],$_POST['state'],'Tunisia',$_POST['phone']);
        $f=new fonctionC();
        $f->addAddress($add);
        header('location:../../../views/adresses.php');
    }
    else
    {
        echo "some error adding this shit";
    }
}
else if ($_POST["form"]=="deleteAdd")
{
    if (isset($_POST['add_id']))
    {
        $f=new fonctionC();
        $f->deleteAdd($_POST['add_id']);
        header('location:../../../views/adresses.php');
    }
}
else if ($_POST["form"]=="editAdd")
{
    if (isset($_POST['address-name']) and isset($_POST['name']) and isset($_POST['street']) and isset($_POST['city']) and isset($_POST['state']) and isset($_POST['zip']) and isset($_POST['phone']) and isset($_POST['add_id']))
    {

        $f=new fonctionC();
        $f->editAdd($_POST['add_id'],$_POST['address-name'],$_POST['name'],$_POST['street'],$_POST['city'],$_POST['state'],$_POST['zip'],$_POST['phone']);
        header('location:../../../views/adresses.php');
    }
    else
    {
        echo "some error adding this shit";
    }
}
 ?>
