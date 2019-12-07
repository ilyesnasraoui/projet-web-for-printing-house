<?php  
	class Reclamation
	{
		private $id;
		private $probleme;
		private $email;
		private $message;
		private $etat;
		private $date_rec;
		private $image ;

		
		function __construct($email,$probleme,$message,$date_rec,$image )
		{
			$this->email = $email;
			$this->probleme = $probleme;
			$this->message = $message;
			$this->date_rec = $date_rec;
			$this->etat = 0 ;
			$this->image = $image ;
		}

		function get_etat(){
		return $this->etat;
	    }
	    function get_image(){
		return $this->image;
	    }

	    function get_prob(){
		return $this->probleme;
		}

		function get_message(){
		return $this->message;
		}

		function get_date(){
		return $this->date_rec;
		}

		function get_email(){
		return $this->email;
		}
		function get_id(){
		return $this->id;
		}
	}

?>