<?PHP
class cartef{
    private $id_carte;
    private $points;
    private $id_client;
    
    function __construct($points,$id_client){
      
        $this->points=$points;
        $this->id_client=$id_client;
    }
    
    function getid_carte(){
        return $this->id_carte;
    }
    function getpoints(){
        return $this->points;
    }
    
    function getid_client(){
        return $this->id_client;
    }

    function setpoints($points){
        $this->points=$points;
    }   
    
    function setid_client($id_client){
        $this->id_client=$id_client;
    }
    
}

?>