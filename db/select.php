<?php
require "../dbBroker.php";
require "../model/termin.php";

if (isset($_POST['displaySend'])) {
    $tabela = '<table id="myTable" class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vreme</th>
        <th scope="col">Tretman</th>
        <th scope="col">Zaposleni</th>
        <th scope="col">Izaberi opciju</th>
      </tr>
    </thead>';

   $podaci = Termin::getAllTermin($conn);
   $rbr = 1;

   while($red = $podaci->fetch_array()) {
    $id = $red['id'];
    $vreme = $red['vreme'];
    $tretman = $red['tretman'];
    $zaposleni = $red['radnik'];

    $tabela .= '<tr>
        <td scope="row">' . $rbr . '</td>
        <td>' . $vreme . '</td>
        <td>' . $tretman . '</td>
        <td>' . $zaposleni . '</td>
        <td>
        <button class="hero-btn purple-btn1" onclick="obrisiTermin('.$id.')"> Obrisi </button></td>
      </tr>';
      $rbr++;
   }
   $tabela .= '</table>';
  echo $tabela;
}


?>

<script type="text/javascript" src="js/sort.js"></script>