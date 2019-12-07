<?php

require_once "D:/wamp64/www/projet/projet/views/config.php";
class fonctionC
{
  public function addAddress($address)
    {
        $sql= "insert into data.adresses(u_uname, add_name, name, street, city, zip_code, state, country, phone) values (:un,:an,:na,:st,:ci,:zip,:stt,:co,:ph)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':un',$address->getUname());
            $req->bindValue(':an',$address->getAdname());
            $req->bindValue(':na',$address->getName());
            $req->bindValue(':st',$address->getStreet());
            $req->bindValue(':ci',$address->getCity());
            $req->bindValue(':zip',$address->getZip());
            $req->bindValue(':stt',$address->getState());
            $req->bindValue(':co',$address->getCountry());
            $req->bindValue(':ph',$address->getPhone());

            $req->execute();
            return true;

        }
        catch (Exception $e)
        {
            return('Erreur: '.$e->getCode());
        }
    }
    function showAdress($uname=null,$addid=null)
    {
          if($addid!=null)
          {
             $sql="select * from data.adresses where add_id='$addid' ORDER BY add_id ASC";
          }
          else if($uname!=null)
          {
          $sql="select * from data.adresses where u_uname='$uname' ORDER BY add_id ASC";
          }

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    public function deleteAdd($addId)
    {
        $sql="DELETE FROM data.adresses WHERE add_id = '$addId' ";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function editAdd($add_id,$add_name,$name,$street,$city,$state,$zip,$phone)
    {
        $sql="update data.adresses set add_name= '$add_name', name='$name',street='$street',city='$city',state='$state',zip_code='$zip', phone='$phone' where add_id='$add_id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
  function getProds($l=null)
  {
      $sql="select * from data.produits ORDER BY id_produit DESC";
      if($l!=null)
      {
          $sql=$sql." limit $l";
      }
      $db=config::getConnexion();
      try
      {
          return $db->query($sql);
      }
      catch (Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
  }
  // aaa
  function ajouterPanier($p_id)
  {
    $sql="insert into data.cart (p_id,ip_add,qty) values (:p_id,:ip_add,:qty)";
    $db = config::getConnexion();
    try
    {
        $req=$db->prepare($sql);
        $ipA=getHostByName(getHostName());
        $qty=1;

        $req->bindValue(':p_id',$p_id);
        $req->bindValue(':ip_add',$ipA);
        $req->bindValue(':qty',$qty);

        $req->execute();


    }

    catch (Exception $e)
    {
        if($e->getCode()==23000)
        {
          $sql2="update data.cart set qty = qty+1 where p_id='$p_id'";
          $db = config::getConnexion();
          try
          {
            $db->query($sql2);
          }
          catch (Exception $e)
          {
            echo 'Error: '.$e->getMessage();
          }


        }

    }

  }
    // aaa tekhou prouit men panier
  function getCart($ipA)
  {
    $sql="select * from data.cart where ip_add='$ipA'";
    $db= config::getConnexion();
    try
    {
      return $db->query($sql);
    }
    catch (Exception $e)
    {
      echo 'Error: '.$e->getMessage;
    }

  }
    // aaa te5ou produit kahaw bel id mte3ou
  function getProd($idP)
  {
      $sql="select * from data.produits where id_produit='$idP'";
      $db=config::getConnexion();
      try
      {
          return $db->query($sql)->fetch();
      }
      catch (Exception $e)
      {
          echo 'error:'.$e->getMessage();
      }
  }
    // aaa tfasse5 prduit mel panier
  function deleteCart($idP)
  {
      $ipA=getHostByName(getHostName());
      $sql="delete from data.cart where ip_add='$ipA' and p_id='$idP'";
      $db=config::getConnexion();
      try
      {
          $db->query($sql);
      }
      catch (Exception $e)
      {
          echo 'error:'.$e->getMessage();
      }
  }
    // aaa tbadel qtt fel panier
  function updateCart($idP,$qty)
  {
      $sql="update data.cart set qty='$qty' where p_id='$idP'";
      $db=config::getConnexion();
      try
      {
          $db->query($sql);
      }
      catch (Exception $e)
      {
          echo 'error: '.$e->getMessage();
      }
  }
    // aaa ajouter commande   , ta3ti lkol prod num fatoura(inooNumber) w ta3tih lel commande bch tnajem tchouf les produits l mawjoudin fel fatoua
  function addFromCart($uname,$idAdd)
      {
          $ipA=gethostbyname(gethostname());
          $l=$this->getCart($ipA);
          $x=rand(1000000,9999999);
          $v=0;
          $n=0;

            $db=config::getConnexion();
          foreach ($l as $p)
          {
              $pId=$p["p_id"];
              $qty=$p["qty"];
              $prod=$this->getProd($pId);
              $v=$v+$prod["prix"]*$qty;
              $n=$n+$qty;
              // ta3ti num fatoura lkol produit fel panier
              $sql="insert into data.pending_orders (uname, innoNumb, prodId,idAdd, qty) values ('$uname','$x','$pId','$idAdd','$qty')";

              try
              {
                  $db->query($sql);
              }
              catch (Exception $e)
              {
                  echo 'error :'.$e->getMessage();
              }
            }
          $sql2="insert into data.orders (uname, dueAmount, innoNumber, totalQty, idAdd) values ('$uname','$v','$x','$n','$idAdd')";
        try
        {
            $db->query($sql2);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }
        $sql3="delete from data.cart where ip_add='$ipA'";
        try
        {
            $db->query($sql3);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }

      }

  function getOrders($uname=null,$inno=null)
  {
    // $uname="YOUSSEF";
    // $inno="2212341";
      if ($uname!=null)
      {
          $sql="select * from data.orders where uname='$uname' order by OrderDate desc";
      }
      else if($inno!=null)
      {
          $sql="select * from data.orders where innoNumber='$inno' order by OrderDate desc";
          $db=config::getConnexion();
          try
          {
              return $db->query($sql)->fetch()["discount"];
          }
          catch (Exception $e)
          {
              echo 'error :'.$e->getMessage();
          }
      }
      else
      {
          $sql="select * from data.orders  order by OrderDate desc";
      }
      $db=config::getConnexion();
      try
      {
          return $db->query($sql);
      }
      catch (Exception $e)
      {
          echo 'error :'.$e->getMessage();
      }
  }
  function getOrderProds($inno)
  {
      $sql="select * from data.pending_orders where innoNumb='$inno'";
      $db=config::getConnexion();
      try
      {
          return $db->query($sql);
      }
      catch (Exception $e)
      {
          echo 'error :'.$e->getMessage();
      }
  }
  function confirmOrder($inno)
  {
      $sql="update data.orders set Status=1  where innoNumber='$inno'";
      $db=config::getConnexion();
      try
      {
         $db->query($sql);
      }
      catch (Exception $e)
      {
          echo 'error :'.$e->getMessage();
      }
  }
  function cancelOrder($inno)
  {
      $sql="update data.orders set Status=-1 where innoNumber='$inno'";
      $db=config::getConnexion();
      try
      {
          $db->query($sql);
      }
      catch (Exception $e)
      {
          echo 'error :'.$e->getMessage();
      }
  }
  function getSoldeF($un)
  {
      $sql="select * from data.solde_fidelite where uname='$un'";
      $db=config::getConnexion();
      try
      {
          return $db->query($sql)->fetch();
      }
      catch (Exception $e)
      {
          echo 'error :'.$e->getMessage();
      }
  }
}
