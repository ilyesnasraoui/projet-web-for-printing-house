<?php
class livraison
{
    private $id_livraison;
    private $id_livreur;
    private $date_livraison;
    private $id_commande;
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
    function __construct($id_livraison,$id_livreur,$date_livraison,$id_commande)
    {
        $this->id_livraison=$id_livraison;
        $this->id_livreur=$id_livreur;
        $this->date_livraison=$date_livraison;
        $this->id_commande=$id_commande;
    }
//-----------------------------------------------------------------------------------------------------------    
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
    public function getId_livreur()
    {
        return $this->id_livreur;
    }

    public function getId_livraison()
    {
        return $this->id_livraison;
    }

    public function getDate_livraison()
    {
        return $this->date_livraison;
    }

    public function getId_commande()
    {
        return $this->id_commande;
    }    
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
    public function setId_livraison($id_livraison)
    {
        $this->id_livraison = $id_livraison;
    }

    public function setId_livreur($id_livreur)
    {
        $this->id_livreur = $id_livreur;
    }

    public function setDate_livraison($date_livraison)
    {
        $this->id_client = $id_client;
    }

    public function setId_commande($id_commande)
    {
        $this->birthday = $birthday;
    }
    
}