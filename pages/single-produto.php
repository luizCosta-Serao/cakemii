<div class="bg-inicio"></div>
<section class="single-produto">
  <div class="single-produto-img">
    <img src="<?php echo INCLUDE_PATH ?>assets/produto-foto.png" alt="">
  </div>
  <div class="single-produto-content">
    <h1>Bolo de Aniversário</h1>
    <span class="preco">R$ 199.00</span>
    <p class="descricao">Celebre seu dia especial com nosso irresistível Bolo de Aniversário Clássico de Chocolate! Camadas fofinhas de massa de chocolate, recheadas com um cremoso ganache de chocolate meio amargo, que derrete na boca a cada garfada.</p>
    <h2>Quantidade:</h2>
    <div class="quantidade">
      <span>+</span>
      <p>1</p>
      <span>-</span>
    </div>
    <button>Adicionar ao Carrinho</button>
  </div>
</section>

<section class="produtos-relacionados">
  <h2 class="title">Produtos Relacionados</h2>
  <ul>
    <li>
      <a href="<?php echo INCLUDE_PATH; ?>single-produto">
        <img src="<?php echo INCLUDE_PATH; ?>assets/produto-foto.png" alt="Foto do produto">
        <h2>Bolo de Aniversário</h2>
        <p>R$ 199,00</p>
      </a>
    </li>

    <li>
      <a href="<?php echo INCLUDE_PATH; ?>single-produto">
        <img src="<?php echo INCLUDE_PATH; ?>assets/produto-foto.png" alt="Foto do produto">
        <h2>Bolo de Aniversário</h2>
        <p>R$ 199,00</p>
      </a>
    </li>
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
    <h2>Deixe um comentário</h2>
    <textarea name="comentario" id="comentario"></textarea>
    <input type="submit" name="comentar" value="Comentar">
  </form>
</section>