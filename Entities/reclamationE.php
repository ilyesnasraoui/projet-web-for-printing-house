<?PHP
class Reclamation
{
	private $probleme;
	private $autre;
	private $date_creation;
	private $etat;
	private $email;
	private $image;
	private $avis;
	private $utilisateur;
	private $reponse;
	function __construct($probleme,$autre,$date_creation,$etat,$email,$image,$avis,$utilisateur,$reponse)
	{
		$this->probleme=$probleme;
		$this->autre=$autre;
		$this->date_creation=$date_creation;
		$this->etat=$etat;
		$this->email=$email;
		$this->image=$image;
		$this->avis=$avis;
		$this->utilisateur=$utilisateur;
		$this->reponse=$reponse;
	}
	
	function getProbleme()
	{
		return $this->probleme;
	}
	function getAutre()
	{
		return $this->autre;
	}
	function getDate_creation()
	{
		return $this->date_creation;
	}
	function getEtat()
	{
		return $this->etat;
	}
	function getEmail()
	{
		return $this->email;
	}

	function getImage()
	{
		return $this->image;
	}
	function getAvis()
	{
		return $this->avis;
	}
	function getUtilisateur()
	{
		return $this->utilisateur;
	}
	function getReponse()
	{
		return $this->reponse;
	}

	function setProbleme($probleme)
	{
		$this->probleme=$probleme;
	}
	function setAutre($autre)
	{
		$this->autre=$autre;
	}
	function setDate_creation($date_creation)
	{
		$this->date_creation=$date_creation;
	}
	function setTarifHoraire($etat)
	{
		$this->etat=$etat;
	}
	function setEmail($email)
	{
		$this->email=$email;
	}
	function setImage($image)
	{
		$this->image=$image;
	}
	function setAvis($avis)
	{
		$this->avis=$avis;
	}
	function setUtilisateur($utilisateur)
	{
		$this->utilisateur=$utilisateur;
	}
	function setReponse($reponse)
	{
		$this->reponse=$reponse;
	}
	
}

?>