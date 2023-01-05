<?php 

require "../dbBroker.php";
require "../model/radnik.php";
require "../model/tretman.php";
require "../model/termin.php";


$tretmanni = Tretman::getAllTretman($conn);
$radnici = Radnik::getAllRadnik($conn);


extract($_POST);
if (isset($_POST['datumSend']) && isset($_POST['tretmanSend']) && isset($_POST['radnikSend'])) {
    $termin = new Termin($null,$_POST['datumSend'],$_POST['tretmanSend'],$_POST['radnikSend']);
    
  $termin->insertIntoTermin( $conn);
}


?>