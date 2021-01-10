<?php

  include 'konekcija.php';
  include 'domen/termin.php';

  $naziv = trim($_POST['naziv']);
  $cena = trim($_POST['cena']);
  $tip = trim($_POST['tip']);
  $trajanje = trim($_POST['trajanje']);

  Termin::sacuvaj($db,$naziv,$cena,$tip,$trajanje);

  header("Location: index.php");

?>