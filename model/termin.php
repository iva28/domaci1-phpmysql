<?php 

class Termin{

    public $id;
    public $vreme;
    public $tretmanId;
    public $radnikId;

    public function __construct($id=null, $vreme=null, $tretmanId=null,$radnikId=null) {
        $this->id = $id;
        $this->vreme = $vreme;
        $this-> tretmanId = $tretmanId;
        $this-> radnikId = $radnikId;
    }


    public static function getAllTermin(mysqli $conn) {
        $query = "SELECT * FROM termin";
        return $conn->query($query);
    } 
    
    public static function getTerminById($id,mysqli $conn) {
        $query = "SELECT * FROM termin WHERE id = $id";
        return $conn->query($query);
    } 

    public  function insertIntoTermin(mysqli $conn) {
        $query = "INSERT INTO termin(vreme, tretman, radnik) VALUES ('$this->vreme','$this->tretmanId','$this->radnikId')";
        return $conn->query($query);
    }

    public static function getLastId(mysqli $conn) {
        $query = "SELECT id FROM termin ORDER BY id DESC LIMIT 1";
        return $conn->query($query);
    }

    public static function deleteTerminById($id, mysqli $conn) {
        $query="DELETE FROM termin WHERE id = $id";
        return $conn->query($query);
    }

    
    public  function updateTerminById( mysqli $conn) {
        $query="UPDATE termin SET vreme = $this->vreme, tretman = '$this->tretmanId', radnik='$this->radnikId' WHERE id = $this->id";
        return $conn->query($query);
    }

}


?>