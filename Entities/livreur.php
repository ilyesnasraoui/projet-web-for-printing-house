<?php
class livreur
{
    private $cin;
    private $nom;
    private $prenom;
    private $birthday;
    private $telephone;
    private $license;
    private $license_validity;
    private $adresse;


    function __construct($cin,$nom,$prenom,$birthday,$telephone,$license,$license_validity,$adresse)
    {
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->birthday=$birthday;
        $this->telephone=$telephone;
        $this->license=$license;
        $this->license_validity=$license_validity;
        $this->adresse=$adresse;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getLicense()
    {
        return $this->license;
    }
    public function getLicense_validity()
    {
        return $this->license_validity;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    
    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $date
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    /**
     * @param mixed $nbcrimes
     */
    
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    
    public function setLicense($license)
    {
        $this->license=$license;
    }
    public function setLicense_validity($license_validity)
    {
        $this->license_validity=$license_validity;
    }
    public function setAdresse($adresse)
    {
        $this->adresse=$adresse;
    }
    
}