<?php
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_produto = MySql::connect()->prepare("DELETE FROM `carrinho` WHERE id = ? AND usuario_id = ?");
    $delete_produto->execute(array($id, $_SESSION['id']));
  }
?>
<div class="bg-inicio"></div>

<section class="carrinho">
  <h1 class="title">Carrinho</h1>
  <ul>
    <?php
      $sql = MySql::connect()->prepare("SELECT * FROM `carrinho` WHERE usuario_id = ?");
      $sql->execute(array($_SESSION['id']));
      $itens_carrinho = $sql->fetchAll();

      $total = 0;
      foreach ($itens_carrinho as $key => $value) {
        $total += $value['preco'] * $value['quantidade'];
    ?>
      <li>
        <img src="<?php echo INCLUDE_PATH ?>uploads/<?php echo $value['imagem'] ?>" alt="">
        <h2><?php echo $value['nome'] ?></h2>
        <span class="preco">R$ <?php echo $value['preco'] ?></span>
        <span class="quantidade"><?php echo $value['quantidade'] ?></span>
        <a href="<?php echo INCLUDE_PATH; ?>carrinho?delete=<?php echo $value['id'] ?>">Deletar</a>
      </li>
    <?php } ?>
  </ul>

  <p class="total"><b>Total: </b>R$ <?php echo $total ?></p>
  <button class="finalizar">Finalizar Compra</button>
</section>