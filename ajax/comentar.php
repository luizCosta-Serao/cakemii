<?php
  include('../config.php');

  $comentario = $_POST['comentario'];
  $id_produto = $_POST['id'];

  $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE id = ?");
  $sql->execute(array($id_produto));
  $produto = $sql->fetch();


  $sql = MySql::connect()->prepare("INSERT INTO `comentarios` VALUES (null, ?, ?, ?)");
  $sql->execute(array($produto['id'], $_SESSION['nome'], $comentario));

  echo '<p class="sucesso">Comentário realizado com sucesso</p>';
?>