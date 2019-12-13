<?php

include "../config.php";
class promotionc
{
    function ajouterpromotion($promotion)
    {
        $sql= "insert into s_i_a_d.promotion(id_promo, pourcentage, delai,fk_id_produit) values (:id_promo,:pourcentage,:delai,:fk_id_produit)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $id_promo=$promotion->getid_promo();
            $pourcentage=$promotion->getpourcentage();
            $delai=$promotion->getdelai();
        $fk_id_produit=$promotion->getfk_id_produit();
            

            $req->bindValue(':id_promo',$id_promo);
            $req->bindValue(':pourcentage',$pourcentage);
            $req->bindValue(':delai',$delai);
            $req->bindValue(':fk_id_produit',$fk_id_produit);
          

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un promotion avec ce id_promo existe deja');

        }

    }
    function afficherpromotion()
    {

        $sql="select * from s_i_a_d.promotion order by id_promo asc";

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
    function modifierpromotion($id_promo,$pourcentage,$delai,$fk_id_produit)
    {
      

        $sql="UPDATE promotion SET pourcentage ='$pourcentage', delai='$delai', fk_id_produit ='$fk_id_produit' WHERE id_promo ='$id_promo'";
        echo $sql;
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
function supprimerpromotion($id_promo){
        $sql="DELETE FROM promotion where id_promo= :id_promo";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_promo',$id_promo);
        try{
            $req->execute();
          header("location:affichepromotion.php");
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function afficherpromotiontrier()
    {

        $sql="select * from s_i_a_d.promotion order by pourcentage asc";

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


}