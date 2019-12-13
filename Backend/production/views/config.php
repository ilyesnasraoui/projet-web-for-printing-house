<?php

class config
{
    private static $instance = NULL;

<<<<<<< HEAD
    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=s_i_a_d.sql', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
=======
    public static function getConnexion()
    {
        if (!isset(self::$instance))
        {
            try
            {

                self::$instance = new PDO('mysql:host=localhost;dbname=s_i_a_d', 'root', '');



                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
        }
        return self::$instance;
>>>>>>> d9604ec259b3892769773d56a9f6dc7cef7704f1
    }
}
?>
