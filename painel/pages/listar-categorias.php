<?php
  if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $sql = MySql::connect()->prepare("DELETE FROM `categorias` WHERE id = ?");
    $sql->execute(array($id_delete));
  }
?>
<section class="visualizar-produtos">
  <h1 class="title">Produtos Cadastrados</h1>
  <?php
    $categorias = MySql::connect()->prepare("SELECT * FROM `categorias`");
    $categorias->execute();
    $categorias = $categorias->fetchAll();

    foreach ($categorias as $key => $value) {
  ?>
    <div class="single-produto">
      <div class="info-single-produto">
        <p><b>Nome da Categoria:</b> <?php echo $value['nome_categoria'] ?></p>
        <a class="btn-excluir" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-categorias?delete=<?php echo $value['id'] ?>">Excluir</a>
        <a class="btn-editar" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-categoria?id=<?php echo $value['id'] ?>">Editar</a>
      </div>
    </div>
  <?php } ?>
</section>