<?php
  include('../config.php');
  header('Content-Type: application/json');

  $pesquisar = $_GET['value'];

  $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE nome LIKE '%$pesquisar%'");
  $sql->execute();
  $resultado = $sql->fetchAll();

  echo json_encode($resultado)
?>