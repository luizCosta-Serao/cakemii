<?php
  include('../config.php');

  $id_produto = $_POST['id_produto'];
  $quantidade = $_POST['quantidade'];

  $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE id = ?");
  $sql->execute(array($id_produto));
  $produto = $sql->fetch();

  $carrinho = MySql::connect()->prepare("SELECT * FROM `carrinho` WHERE usuario_id = ? AND id_produto = ?");
  $carrinho->execute(array($_SESSION['id'], $produto['id']));
  if ($carrinho->rowCount() === 0) {    
      $sql = MySql::connect()->prepare("INSERT INTO `carrinho` VALUES (null, ?, ?, ?, ?, ?, ?)");
      $sql->execute(array($_SESSION['id'], $produto['id'], $produto['nome'], $produto['imagem'], $produto['preco'], $quantidade));
  } else {
    $sql = MySql::connect()->prepare("UPDATE `carrinho` SET quantidade = ? WHERE usuario_id = ? AND id_produto = ?");
    $sql->execute(array($quantidade, $_SESSION['id'], $produto['id']));
  }

  echo '<p class="sucesso">Produto adicionado ao carrinho</p>';
?>