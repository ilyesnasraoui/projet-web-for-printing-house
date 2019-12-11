<?php

class config
{
    private static $instance = NULL;

    public static function getConnexion()
    {
        if (!isset(self::$instance))
        {
            try
            {
<<<<<<< HEAD
                self::$instance = new PDO('mysql:host=localhost;dbname=data', 'root', '');
=======
                self::$instance = new PDO('mysql:host=localhost;dbname=s_i_a_d', 'root', '');
>>>>>>> 64b390bb6a25b6741daf6b52224e63e6595d0cba
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>
