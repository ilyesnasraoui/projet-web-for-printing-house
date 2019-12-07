<?PHP
class Categorie{
	private $id_cat;
	private $nom;


	function __construct($nom,$id_cat){
		$this->nom=$nom;
		$this->id_cat= $id_cat;
	}


	function getnom(){
		return $this->nom;
	}
	
	function setnom($nom){
		$this->nom=$nom;
	}

	function getid_cat(){
		return $this->id_cat;
	}
	
	function setid_cat($id_cat){
		$this->id_cat=$id_cat;
	}
	
}

?>