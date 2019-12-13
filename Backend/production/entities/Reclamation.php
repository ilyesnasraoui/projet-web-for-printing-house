<?php  
	class Reclamation
	{
		private $id;
		private $probleme;
		private $email;
		private $etat;
		private $date_creation;
		private $autre ;

		
		function __construct($email,$probleme,$autre,$date_creation,$etat )
		{
			$this->email = $email;
			$this->probleme = $probleme;
			$this->autre = $autre;
			$this->date_creation = $date_creation;
			$this->etat = 0 ;
		}

		function get_etat(){
		return $this->etat;
	    }

	    function get_prob(){
		return $this->probleme;
		}

		function get_autre(){
		return $this->message;
		}

		function get_date(){
		return $this->date_creation;
		}

		function get_email(){
		return $this->email;
		}
		function get_id(){
		return $this->id;
		}
	}

?>