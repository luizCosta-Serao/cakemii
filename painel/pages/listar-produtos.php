<?php

  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE id = ?");
    $sql->execute(array($id));
    $delete = $sql->fetch();
    @unlink(BASE_DIR.'/uploads/'.$delete['imagem']);
    
    $sql = MySql::connect()->prepare("DELETE FROM `produtos` WHERE id = ?");
    $sql->execute(array($id));

  }

?>


<section class="visualizar-produtos">
  <h1 class="title">Produtos Cadastrados</h1>
  <?php
    $produtos = MySql::connect()->prepare("SELECT * FROM `produtos`");
    $produtos->execute();
    $produtos = $produtos->fetchAll();

    foreach ($produtos as $key => $value) {
  ?>
    <div class="single-produto">
      <div class="info-single-produto">
        <p><b>Nome do Produto:</b> <?php echo $value['nome'] ?></p>
        <p><b>Preço do Produto:</b> <?php echo $value['preco'] ?></p>
        <p><b>Descrição do Produto:</b> <?php echo $value['descricao'] ?></p>
        <p><b>Categoria do Produto:</b> <?php echo $value['categoria'] ?></p>
        <a class="btn-excluir" href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-produtos?delete=<?php echo $value['id'] ?>">Excluir</a>
        <a class="btn-editar" href="">Editar</a>
      </div>
      <div class="img-single-produto">
        <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $value['imagem'] ?>" alt="">
      </div>
    </div>
  <?php } ?>
</section>