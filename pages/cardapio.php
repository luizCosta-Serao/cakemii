<div class="bg-inicio-cardapio"></div>

<section class="cardapio">

  <div class="procurar-cardapio">
    <form method="get" class="busca-cardapio">
      <label for="pesquisar">Pesquisar</label>
      <input type="text" name="pesquisar" id="pesquisar">
    </form>
  
    <div class="categorias-cardapio">
      <h2>Categorias</h2>
      <?php
        $sql = MySql::connect()->prepare("SELECT * FROM `categorias`");
        $sql->execute();
        $categorias = $sql->fetchAll();
        foreach ($categorias as $key => $value) {
      ?>
      <span><?php echo $value['nome_categoria'] ?></span>
      <?php } ?>
    </div>
  </div>

  <ul class="itens-cardapio">
    <?php
      $sql = MySql::connect()->prepare("SELECT * FROM `produtos`");
      $sql->execute();
      $produtos = $sql->fetchAll();
      foreach ($produtos as $key => $value) {
    ?>
      <li>
        <a href="<?php echo INCLUDE_PATH; ?>single-produto">
          <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $value['imagem'] ?>" alt="<?php echo $value['nome'] ?>">
          <h2><?php echo $value['nome'] ?></h2>
          <p>R$ <?php echo $value['preco'] ?></p>
        </a>
      </li>
    <?php } ?>
  </ul>
</section>

<div class="paginacao">
    <span class="active">1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
  </div>