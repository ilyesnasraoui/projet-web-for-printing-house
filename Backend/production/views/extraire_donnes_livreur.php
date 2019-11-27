<?php  

include "config.php";

class livreur_accepteC
{

	function infoLivreur()
    {

        $sql="insert into livreur select * from nouveau_livreur";//changer le nom du tableau 

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

	

?>