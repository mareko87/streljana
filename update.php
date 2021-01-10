<?php

  include 'konekcija.php';
  include 'domen/termin.php';

  $id = trim($_POST['id']);
  $cena = trim($_POST['cena']);

  Termin::izmeni($db,$cena,$id);

  header("Location: index.php");

?>
