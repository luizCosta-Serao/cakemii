<?php
  $id_produto = $_GET['id'];
  $sql = MySql::connect()->prepare("SELECT * FROM `produtos` WHERE id = ?");
  $sql->execute(array($id_produto));
  $produto = $sql->fetch();
?>
<div class="bg-inicio"></div>
<section class="single-produto">
  <div class="single-produto-img">
    <img src="<?php echo INCLUDE_PATH ?>assets/produto-foto.png" alt="">
  </div>
  <div class="single-produto-content">
    <h1><?php echo $produto['nome'] ?></h1>
    <span class="preco">R$ <?php echo $produto['preco'] ?></span>
    <p class="descricao"><?php echo $produto['descricao'] ?></p>
    <h2>Quantidade:</h2>
    <div class="quantidade">
      <span class="add-quantidade">+</span>
      <p>1</p>
      <span class="remove-quantidade">-</span>
    </div>
    <button>Adicionar ao Carrinho</button>
  </div>
</section>

<section class="produtos-relacionados">
  <h2 class="title">Produtos Relacionados</h2>
  <ul>
    <?php
      $sql = MySql::connect()->prepare('SELECT * FROM `produtos` WHERE categoria = ? AND id != ? LIMIT 3');
      $sql->execute(array($produto['categoria'], $produto['id']));
      $produtos_relacionados = $sql->fetchAll();
      foreach ($produtos_relacionados as $key => $value) {
    ?>
      <li>
        <a href="<?php echo INCLUDE_PATH; ?>single-produto?id=<?php echo $value['id'] ?>">
          <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $value['imagem'] ?>" alt="Foto do produto">
          <h2><?php echo $value['nome'] ?></h2>
          <p>R$ <?php echo $value['preco'] ?></p>
        </a>
      </li>
    <?php } ?>
  </ul>
</section>

<section class="comentarios">
  <h2 class="title">Comentários</h2>
  <div class="single-comentario">
    <div>
      <img src="<?php echo INCLUDE_PATH ?>assets/foto-perfil.png" alt="">
      <span class="nome-usuario">Luiz Antonio</span>
    </div>
    <p class="comentario">Bolo muito gostoso! Comprarei mais vezes</p>
  </div>

  <div class="single-comentario">
    <div>
      <img src="<?php echo INCLUDE_PATH ?>assets/foto-perfil.png" alt="">
      <span class="nome-usuario">Luiz Antonio</span>
    </div>
    <p class="comentario">Bolo muito gostoso! Comprarei mais vezes</p>
  </div>

  <form action="" method="post">
    <h2 class="title">Deixe um comentário</h2>
    <textarea name="comentario" id="comentario"></textarea>
    <input type="submit" name="comentar" value="Comentar">
  </form>
</section>