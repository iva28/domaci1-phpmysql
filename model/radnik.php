<?php 

class Radnik {
    public $id;
    public $ime;
    public $prezime;
    public $telefon;



    public function __construct( $id = null,  $ime=null,  $prezime = null, $telefon = null ) {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->telefon = $telefon;
    }


    public static function getAllRadnik(mysqli $conn) {
        $query = "SELECT * FROM radnik";
        return $conn->query($query);
    }

}


?>