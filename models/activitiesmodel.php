<?php

class activitiesModel extends Model
{
    private $url;
    public function __construct()
    {
        parent::__construct();
        $this->url = $_SERVER["REQUEST_URI"];
        $this->url = trim($this->url, "/");
        $this->url = explode("/", $this->url);
        
        switch ($this->url[0]) {
            case 'challenges':
                $this->AumentarVisita(2);
                break;
            case 'memoria':
                $this->AumentarVisita(3);
                break;
            case 'lenguajes':
                $this->AumentarVisita(4);
                break;
            
            default:
                $this->AumentarVisita(1);
                break;
        }
    }

    public function AumentarVisita($id){
        $query = $this->db->connect()->prepare("SELECT * FROM estadisticas  WHERE id=?");
        $query->execute([$id]);
        $estadistica = $query->fetch(PDO::FETCH_ASSOC);
        $visitas = $estadistica['visitas'];
        $visitas = $visitas + 1;
    
        $query = $this->db->connect()->prepare("UPDATE estadisticas SET visitas = ? WHERE id=?");
        $query->execute([$visitas, $id]);
        // $result = $query->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>