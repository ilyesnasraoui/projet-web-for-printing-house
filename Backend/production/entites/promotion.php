<?PHP
class promotion{
    private $id_promo;
    private $pourcentage;
    private $delai;
    private $fk_id_produit;
    
    function __construct($pourcentage,$delai,$fk_id_produit){
       // $this->id_promo=$id_promo;
        $this->pourcentage=$pourcentage;
        $this->delai=$delai;
        $this->fk_id_produit=$fk_id_produit;
    }
    
    function getid_promo(){
        return $this->id_promo;
    }
    function getpourcentage(){
        return $this->pourcentage;
    }
    function getdelai(){
        return $this->delai;
    }
    
    function getfk_id_produit(){
        return $this->fk_id_produit;
    }

    function setpourcentage($pourcentage){
        $this->pourcentage=$pourcentage;
    }
    function setdelai($delai){
        $this->delai;
    }
    
    function setfk_id_produit($fk_id_produit){
        $this->fk_id_produit=$fk_id_produit;
    }
    
}

?>