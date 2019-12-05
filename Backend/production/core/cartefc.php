<?php

include "../config.php";
class cartefc
{
    function ajoutercartef($cartef)
    {
        $sql= "insert into s_i_a_d.carte_fidelite(id_carte,points,id_client) values (:id_carte,:points,:id_client)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $id_carte=$cartef->getid_carte();
            $points=$cartef->getpoints();
            $id_client=$cartef->getid_client();
            

            $req->bindValue(':id_carte',$id_carte);
            $req->bindValue(':points',$points);
            $req->bindValue(':id_client',$id_client);
          

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un cartef avec ce id_carte existe deja');

        }

    }
    function affichercartef()
    {

        $sql="select * from s_i_a_d.carte_fidelite order by id_carte asc";

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
    function modifiercartef($id_carte,$points,$id_client)
    {
      

        $sql="UPDATE carte_fidelite SET points ='$points', id_client ='$id_client' WHERE id_carte ='$id_carte'";
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
function supprimercartef($id_carte){
        $sql="DELETE FROM carte_fidelite where id_carte= :id_carte";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_carte',$id_carte);
        try{
            $req->execute();
          header("location:affichercartefidelite.php");
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}