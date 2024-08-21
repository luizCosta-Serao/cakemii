<?php
  $id = $_GET['id'];
  $sql = MySql::connect()->prepare("SELECT * FROM `categorias` WHERE id = ?");
  $sql->execute(array($id));
  $single_categoria = $sql->fetch();
?>
<section class="cadastrar-produto">
  <h1 class="title">Atualizar Categoria</h1>

  <form method="post" enctype="multipart/form-data">
    <?php
      if (isset($_POST['acao'])) {
        $nome_categoria = $_POST['categoria'];
        $slug = Painel::generateSlug($nome_categoria);
        if ($nome_categoria === '') {
          Geral::alert('erro', 'É necessário preencher o nome da categoria');
        } else {
          $sql = MySql::connect()->prepare("UPDATE `categorias` SET nome_categoria = ?, slug = ? WHERE id = ?");
          $sql->execute(array($nome_categoria, $slug, $id));
          Geral::alert('sucesso', 'Categoria atualizada com sucesso');

          $sql = MySql::connect()->prepare("SELECT * FROM `categorias` WHERE id = ?");
          $sql->execute(array($id));
          $single_categoria = $sql->fetch();
        }
      }
    ?>

    <div>
      <label for="categoria">Nome da Categoria</label>
      <input type="text" name="categoria" id="categoria" value="<?php echo $single_categoria['nome_categoria'] ?>">
    </div>

    <input type="submit" name="acao" id="acao" value="Atualizar Categoria">
  </form>