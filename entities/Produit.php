<?PHP
class Cart{
	private $id_produit;
	private $nom;
	private $prix;
	private $desc;
	private $quantite;
	private $type;
	private $id_cat;
	private $image;


	function __construct($id_produit,$nom,$prix,$desc,$quantite,$type,$id_cat,$image){
		$this->id_produit=$id_produit;
		$this->nom=$nom;
		$this->$prix=$prix;
		$this->desc=$desc;
		$this->quantite=$quantite;
		$this->type=$type;
		$this->id_cat= $id_cat;
		$this->image=$image;
	}
	
	function getid_produit(){
		return $this->id_produit;
	}
	
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}

	function getnom(){
		return $this->nom;
	}
	
	function setnom($nom){
		$this->nom=$nom;
	}

	function getprix(){
		return $this->prix;
	}
	
	function setprix($prix){
		$this->prix=$prix;
	}

	function getdesc(){
		return $this->desc;
	}
	
	function setdesc($desc){
		$this->desc=$desc;
	}

	function getquantite(){
		return $this->quantite;
	}
	
	function setquantite($quantite){
		$this->quantite=$quantite;
	}

	function gettype(){
		return $this->type;
	}
	
	function settype($type){
		$this->type=$type;
	}

	function getid_cat(){
		return $this->id_cat;
	}
	
	function setid_cat($id_cat){
		$this->id_cat=$id_cat;
	}

	function getimage(){
		return $this->image;
	}
	
	function setimage($image){
		$this->image=$image;
	}
	
}

?>