<?php

include "config.php";

class livraisonC
{
    function ajouterLivraison($livraison)//changer le nom de la fonction
    {
        $sql="INSERT INTO livraison(id_livraison,id_livreur,date_livraison,id_commande) VALUES (:id_livraison,:id_livreur,:date_livraison,:id_commande)";//changer le nom du tableau"
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $id_livraison=$livraison->getId_livraison();
            $id_livreur=$livraison->getId_livreur();
            $date_livraison=$livraison->getDate_livraison();
            $id_commande=$livraison->getId_commande();
            //var_dump($livreur);

            $req->bindValue(':id_livraison',$id_livraison);
            $req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':date_livraison',$date_livraison);
            $req->bindValue(':id_commande',$id_commande);
            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur:'.$e->getMessage());

        }

    }


    function afficherLivraison()
    {

        $sql="select * from livraison";//changer le nom du tableau 

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
    

    function suppLivraison($id_livraison)
    {
        $sql="DELETE FROM `s_i_a_d.sql`.`livraison` WHERE `id_livraison` LIKE '$id_livraison' ESCAPE '#'";
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

}