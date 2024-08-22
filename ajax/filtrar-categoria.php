<?php
  include('../config.php');
  header('Content-Type: application/json');

  $categoria = $_GET['categoria'];

  $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE categoria = ?");
  $sql->execute(array($categoria));
  $filtro_categoria = $sql->fetchAll();

  echo json_encode($filtro_categoria);
?>