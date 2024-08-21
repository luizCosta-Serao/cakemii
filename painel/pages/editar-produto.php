<?php
  $id = $_GET['id'];
  if (isset($_GET['id'])) {
    $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE id = ?");
    $sql->execute(array($id));
    $single_produto = $sql->fetch();
  }
?>
<section class="cadastrar-produto">
  <h1 class="title">Atualizar Produto</h1>

  <form method="post" enctype="multipart/form-data">
    <?php
      if (isset($_POST['acao'])) {
        // Obtendo valores dos inputs
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $imagem = $_FILES['imagem'];

        if(
          $nome === '' ||
          $preco === '' ||
          $descricao === '' ||
          $categoria === ''
        ) {
          Geral::alert('erro', 'É necessário preencher todos os campos');
        } else if ($imagem['size'] === 0) {
          $imagem_produto = $single_produto['imagem'];
          $sql = MySql::connect()->prepare("UPDATE `produtos` SET nome = ?, preco = ?,  descricao = ?, categoria = ?, imagem = ? WHERE id = ?");
          $sql->execute(array($nome, $preco, $descricao, $categoria, $imagem_produto, $id));
          Geral::alert('sucesso', 'Produto cadastrado com sucesso');
        } else if (Painel::imagemValida($imagem) === false) {
          Geral::alert('erro', 'formato da imagem inválida');
        } else {
          $imagem_produto = Painel::uploadFile($imagem);
          @unlink(BASE_DIR.'/uploads/'.$single_produto['imagem']);
         
          $sql = MySql::connect()->prepare("UPDATE `produtos` SET nome = ?, preco = ?,  descricao = ?, categoria = ?, imagem = ? WHERE id = ?");
          $sql->execute(array($nome, $preco, $descricao, $categoria, $imagem_produto, $id));
  
          Geral::alert('sucesso', 'Produto cadastrado com sucesso');
        }
      }
    ?>

    <div>
      <label for="nome">Nome do Produto</label>
      <input type="text" name="nome" id="nome" value="<?php echo $single_produto['nome']; ?>">
    </div>

    <div>
      <label for="preco">Preço do Produto</label>
      <input type="text" name="preco" id="preco" value="<?php echo $single_produto['preco']; ?>">
    </div>

    <div>
      <label for="categoria">Categoria do Produto</label>
      <select name="categoria" id="categoria">
        <?php
          $categorias = MySql::connect()->prepare("SELECT * FROM `categorias`");
          $categorias->execute();
          $categorias = $categorias->fetchAll();
          foreach ($categorias as $key => $value) {
        ?>
          <option value="<?php echo $value['slug'] ?>"><?php echo $value['nome_categoria'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div>
      <label for="descricao">Descrição do Produto</label>
      <textarea name="descricao" id="descricao"><?php echo $single_produto['descricao'] ?></textarea>
    </div>

    <div> 
      <label for="imagem">Selecione as Imagens</label>
      <input multiple type="file" name="imagem" id="imagem">
    </div>

    <input type="submit" name="acao" id="acao" value="Cadastrar Produto">
  </form>
</section>