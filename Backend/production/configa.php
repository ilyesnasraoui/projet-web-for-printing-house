<?php
	class configa
	{
		private static $instance = NULL;

		public static function getConnexion()
		{
     		if (!isset(self::$instance))
     		{
				self::$instance = new PDO('mysql:host=localhost;dbname=s_i_a_d','root', '');
      		}
            return self::$instance;
   		}
  	}
?>
