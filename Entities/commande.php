<?php
include_once '../config.php';
class Commande{
	protected $Id_Cmd;
	protected $date_Cmd;
	protected $montant_Cmd;
	protected $etat_Cmd;
	protected $lieu_livraison;
	protected $prix_livraison;
  protected $delai_livraison;
	protected $Id_livreur;
	protected $Id_Client;
  protected $Id_Produit;
  protected $mode_payement;
  protected $quantite;
        function __construct($date_Cmd=NULL, $montant_Cmd=NULL,$etat_Cmd=NULL, $lieu_livraison=NULL, $prix_livraison=NULL, $delai_livraison=NULL, $id_livreur=NULL, $id_Client=NULL, $Id_Produit=NULL, $mode_payement=NULL,$quantite=NULL) {
            $this->date_Cmd =$date_Cmd;
            $this->montant_Cmd = $montant_Cmd;
            $this->etat_Cmd = $etat_Cmd;
            $this->lieu_livraison = $lieu_livraison;
            $this->prix_livraison = $prix_livraison;
            $this->$delai_livraison = $delai_livraison;
            $this->Id_livreur = $Id_livreur;
            $this->Id_Client = $Id_Client;
            $this->Id_Produit = $Id_Produit
            $this->mode_payement = $mode_payement;
            $this->quantite = $quantite
        }
        function getId_Cmd() {
            return $this->Id_Cmd;
        }

        function getdate_Cmd() {
            return $this->date_Cmd;
        }

        function getmonntant_Cmd() {
            return $this->montant_Cmd;
        }
        function getetat_Cmd() {
            return $this->etat_Cmd;
        }

        function getlieu_livraison() {
            return $this->lieu_livraison;
        }

        function getprix_livraison() {
            return $this->prix_livraison;
        }
        function getdelai_livraison() {
            return $this->delai_livraison;
        }

        function getId_livreur() {
            return $this->Id_livreur;
        }

        function getId_Client() {
            return $this->Id_Client;
        }
        function getId_Produit()
        {
            return $this->Id_Produit;
        }
        function getmode_payment() {
            return $this->mode_payement;
        }

        function setId_Cmd($Id_Cmd) {
            $this->Id_Cmd = $Id_Cmd;
        }

        function setdate_Cmd($date_Cmd) {
            $this->date_Cmd = $date_Cmd;
        }

        function setmontant_Cmd($montant_Cmd) {
            $this->montant_Cmd = $montant_Cmd;
        }
        function setetat_Cmd($etat_Cmd) {
            $this->etat_Cmd = $etat_Cmd;
        }

        function setlieu_livraison($lieu_livraison) {
            $this->lieu_livraison = $lieu_livraison;
        }

        function setprix_livraison($prix_livraison) {
            $this->prix_livraison = $prix_livraison;
        }

        function setdelai_livraison($delai_livraison) {
            $this->delai_livraison = $delai_livraison;
        }

        function setId_livreur($Id_livreur) {
            $this->Id_livreur = $Id_livreur;
        }

        function setId_Client($Id_Client) {
            $this->Id_Client = $Id_Client;
        }
        function setId_Produit($Id_Produit) {
            $this->Id_Produit = $Id_Produit
        }
        function setmode_payment($mode_payement) {
            $this->mode_payement = $mode_payement;
        }
        function setquantite($quantite) {
          $this->quantite = $quantite;
        }




}
 ?>
