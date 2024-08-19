<section class="cadastrar-produto">
  <h1 class="title">Cadastrar Produto</h1>

  <form method="post" enctype="multipart/form-data">
    <?php
      if (isset($_POST['acao'])) {
        $nome_categoria = $_POST['categoria'];
        $slug = Painel::generateSlug($nome_categoria);
        if ($nome_categoria === '') {
          Geral::alert('erro', 'É necessário preencher o nome da categoria');
        } else {
          $sql = MySql::connect()->prepare('INSERT INTO `categorias` VALUES (null, ?, ?)');
          $sql->execute(array($nome_categoria, $slug));
          Geral::alert('sucesso', 'Categoria cadastrada com sucesso');
        }
      }
    ?>

    <div>
      <label for="categoria">Nome da Categoria</label>
      <input type="text" name="categoria" id="categoria">
    </div>

    <input type="submit" name="acao" id="acao" value="Cadastrar Produto">
  </form>
</section>