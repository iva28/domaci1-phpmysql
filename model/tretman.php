<?php 

class Tretman {
    public $id;
    public $naziv;


    public function __construct($id = null,$naziv = null) {
        $this->id = $id;
        $this->naziv = $naziv;
    }

    public static function getAllTretman(mysqli $conn) {
        $query = "SELECT * FROM tretman";
        return $conn->query($query);
    }
}


?>