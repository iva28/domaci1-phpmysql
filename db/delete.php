<?php 

require "../dbBroker.php";
require "../model/termin.php";

if(isset($_POST['deletesend'])) {
    $id = $_POST['deletesend'];
    Termin::deleteTerminById($id,$conn);
}

?>