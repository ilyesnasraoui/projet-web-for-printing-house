<?php  
	/**
	 * 
	 */
	class Demande
	{
		private $id;
		private $email;
		private $type;
		private $message;
		private $etat;
		private $date;


		/*
$Probleme,$email,$message,$etat,$date_rec;
		*/
		
		function __construct($email,$type,$message,$date)
		{
			$this->email = $email;
			$this->type = $type;
			$this->message = $message;
			$this->date = $date;
			$this->etat = 0 ;
		}

		function get_etat(){
		return $this->etat;
	    }

	    function get_type(){
		return $this->type;
		}

		function get_message(){
		return $this->message;
		}

		function get_date(){
		return $this->date;
		}

		function get_email(){
		return $this->email;
		}
		function get_id(){
		return $this->id;
		}
	}

?>