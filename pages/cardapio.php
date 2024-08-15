<div class="bg-inicio-cardapio"></div>

<section class="cardapio">

  <div class="procurar-cardapio">
    <form method="post" class="busca-cardapio">
      <label for="pesquisar">Pesquisar</label>
      <input type="text" name="pesquisar" id="pesquisar">
    </form>
  
    <div class="categorias-cardapio">
      <h2>Categorias</h2>
      <a href="">Bolos</a>
      <a href="">Tortas</a>
      <a href="">Doces Artesanais</a>
      <a href="">Doces Gourmet</a>
    </div>
  </div>

  <ul class="itens-cardapio">
    <li>
      <a href="<?php echo INCLUDE_PATH; ?>single-produto">
        <img src="<?php echo INCLUDE_PATH; ?>assets/produto-foto.png" alt="Foto do produto">
        <h2>Bolo de Aniversário</h2>
        <p>R$ 199,00</p>
      </a>
    </li>

    <li>
      <a href="">
        <img src="<?php echo INCLUDE_PATH; ?>assets/produto-foto.png" alt="Foto do produto">
        <h2>Bolo de Aniversário</h2>
        <p>R$ 199,00</p>
      </a>
    </li>

    <li>
      <a href="">
        <img src="<?php echo INCLUDE_PATH; ?>assets/produto-foto.png" alt="Foto do produto">
        <h2>Bolo de Aniversário</h2>
        <p>R$ 199,00</p>
      </a>
    </li>

    <li>
      <a href="">
        <img src="<?php echo INCLUDE_PATH; ?>assets/produto-foto.png" alt="Foto do produto">
        <h2>Bolo de Aniversário</h2>
        <p>R$ 199,00</p>
      </a>
    </li>
  </ul>
</section>

<div class="paginacao">
    <span class="active">1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
  </div>