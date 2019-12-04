<?php

include "config.php";

class livreurC
{
    function ajouterLivreur($livreur)//changer le nom de la fonction
    {
        $sql="INSERT INTO nouveau_livreur(cin, nom, prenom, birthday, telephone, license, license_validity, adresse) VALUES (:cin, :nom, :prenom, :birthday, :telephone, :license, :license_validity, :adresse)";//changer le nom du tableau"
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $cin=$livreur->getCin();
            $nom=$livreur->getNom();
            $prenom=$livreur->getPrenom();
            $birthday=$livreur->getBirthday();
            $telephone=$livreur->getTelephone();
            $license=$livreur->getLicense();
            $license_validity=$livreur->getLicense_validity();
            $adresse=$livreur->getAdresse();
            var_dump($livreur);

            $req->bindValue(':cin',$cin);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':birthday',$birthday);
            $req->bindValue(':telephone',$telephone);
            $req->bindValue(':license',$license);
            $req->bindValue(':license_validity',$license_validity);
            $req->bindValue(':adresse',$adresse);
            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur:'.$e->getMessage());

        }

    }

    function afficherLivreur()
    {

        $sql="select * from nouveau_livreur";//changer le nom du tableau 

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
    

    function suppLivreur($cin)
    {
        $sql="DELETE FROM `s_i_a_d.sql`.`nouveau_livreur` WHERE `cin` LIKE '$cin' ESCAPE '#'";
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
?>