<?php

include "config.php";

class livreur_accepteC
{
    function ajouterLivreur($livreur)//changer le nom de la fonction
    {
        $sql="INSERT INTO livreur(cin, nom, prenom, birthday, telephone, license, license_validity, adresse,joiniable,login,mdp) VALUES (:cin, :nom, :prenom, :birthday, :telephone, :license, :license_validity, :adresse,:joiniable,:login,:mdp)";//changer le nom du tableau"
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
   
            $joiniable=$livreur->getJoiniable();            
   
            $login=$livreur->getLogin();            
   
            $mdp=$livreur->getMdp();            
            //var_dump($livreur);

            $req->bindValue(':cin',$cin);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':birthday',$birthday);
            $req->bindValue(':telephone',$telephone);
            $req->bindValue(':license',$license);
            $req->bindValue(':license_validity',$license_validity);
            $req->bindValue(':adresse',$adresse);
 
            $req->bindValue(':joiniable',$joiniable);
 
            $req->bindValue(':login',$login);
 
            $req->bindValue(':mdp',$mdp);
            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur:'.$e->getMessage());

        }

    }

    function afficherLivreur()
    {

        $sql="select * from livreur";//changer le nom du tableau 

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
        $sql="DELETE FROM `s_i_a_d.sql`.`livreur` WHERE `cin` LIKE '$cin' ESCAPE '#'";
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



    function modifierLivreur($cin,$joiniable)
    {
        $sql="update livreur set joiniable=$joiniable where cin='$cin'";
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