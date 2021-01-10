<?php

  include 'konekcija.php';
  include 'domen/termin.php';

  Termin::obrisi($db,$_GET['id']);

  header("Location: index.php");

?>
