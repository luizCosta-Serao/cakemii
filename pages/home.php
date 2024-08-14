<div class="bg-inicio"></div>
<section class="hero-home">
  <h1>Bem-vindo ao Mundo dos Doces Deliciosos! 🍬</h1>
  <p>Satisfaça seu desejo por doces! Aqui, cada mordida é uma explosão de sabor. Nossos doces são feitos com amor e ingredientes de alta qualidade, garantindo que cada pedacinho seja uma experiência inesquecível.</p>
  <a href="<?php echo INCLUDE_PATH ?>cardapio">VER CARDÁPIO</a>
</section>

<section class="porque-nos-escolher">
  <h2 class="title">Por Que Escolher Nossos Doces? </h2>
  <ul>
    <li>
      <img src="<?php echo INCLUDE_PATH ?>assets/cake.svg" alt="Cake">
      <h3>Qualidade</h3>
      <p>Usamos apenas os melhores ingredientes.</p>
    </li>

    <li>
      <img src="<?php echo INCLUDE_PATH ?>assets/cookie.svg" alt="Cookie">
      <h3>Sabor Inigualável</h3>
      <p>Cada doce é uma obra-prima de sabor.</p>
    </li>

    <li>
      <img src="<?php echo INCLUDE_PATH ?>assets/restaurant.svg" alt="Restaurant">
      <h3>Atendimento Personalizado</h3>
      <p>Estamos aqui para tornar sua experiência doce ainda mais especial.</p>
    </li>
  </ul>
</section>

<section class="nossas-opcoes">
  <h2 class="title">Delicie-se com nossas opções:</h2>
  <ul>
    <li>
      <a href="<?php echo INCLUDE_PATH ?>cardapio?categoria=bolos">
        <img src="<?php echo INCLUDE_PATH ?>assets/bg-opcoes.png" alt="Bolos">
        <p>Bolos</p>
      </a>
    </li>

    <li>
      <a href="<?php echo INCLUDE_PATH ?>cardapio?categoria=doces-artesanais">
        <img src="<?php echo INCLUDE_PATH ?>assets/bg-opcoes.png" alt="Doces Artesanais">
        <p>Doces Artesanais</p>
      </a>
    </li>

    <li>
      <a href="<?php echo INCLUDE_PATH ?>cardapio?categoria=tortas">
        <img src="<?php echo INCLUDE_PATH ?>assets/bg-opcoes.png" alt="Tortas">
        <p>Tortas</p>
      </a>
    </li>
    
    <li>
      <a href="<?php echo INCLUDE_PATH ?>cardapio?categoria=doces-gourmet">
        <img src="<?php echo INCLUDE_PATH ?>assets/bg-opcoes.png" alt="Doces Gourmet">
        <p>Doces Gourmet</p>
      </a>
    </li>
  </ul>
</section>

<div class="bg-contato">

  <section class="contato">
    <div class="container-contato">
      <h2 class="title">Entre em Contato</h2>
      <p>Tem alguma dúvida ou deseja fazer um pedido? Estamos aqui para ajudar! Entre em contato conosco:</p>
      <ul>
        <li>
          <img src="<?php echo INCLUDE_PATH ?>assets/phone.svg" alt="Phone">
          <p><b>Telefone:</b> (44) 99999-9999</p>
        </li>
  
        <li>
          <img src="<?php echo INCLUDE_PATH ?>assets/email.svg" alt="Email">
          <p><b>Email:</b> contato@cakemii.com</p>
        </li>
  
        <li class="redes-sociais">
          <p><b>Redes Sociais:</b>  Siga-nos no Instagram e Facebook para novidades e promoções!</p>
          <div>
            <img src="<?php echo INCLUDE_PATH ?>assets/instagram.svg" alt="Instagram">
            <img src="<?php echo INCLUDE_PATH ?>assets/facebook.svg" alt="Facebook">
          </div>
        </li>
      </ul>
  
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12650.174407209486!2d-54.56138554715481!3d-23.681203490921632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x948b17ff86e261f1%3A0xfca3fe95898c32ce!2sHotel%20Karanda!5e0!3m2!1spt-BR!2sbr!4v1723290207046!5m2!1spt-BR!2sbr" width="467" height="306" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      <h3 class="title-localidades">Atendemos nas seguintes localidades:</h3>
      <ul class="localidases">
        <li>
          <img src="<?php echo INCLUDE_PATH ?>assets/location.svg" alt="Location">
          <p>Centro da Cidade</p>
        </li>
        <li>
          <img src="<?php echo INCLUDE_PATH ?>assets/location.svg" alt="Location">
          <p>Bairro das Flores</p>
        </li>
        <li>
          <img src="<?php echo INCLUDE_PATH ?>assets/location.svg" alt="Location">
          <p>Vila dos Sonhos</p>
        </li>
        <li>
          <img src="<?php echo INCLUDE_PATH ?>assets/location.svg" alt="Location">
          <p>Jardim das Delícias</p>
        </li>
      </ul>
    </div>
    <form class="form-contato" action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
  
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
  
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
  
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" id="mensagem"></textarea>
  
        <div>
          <input type="submit" name="enviar_mensagem" value="Enviar">
        </div>
    </form>
  </section>
</div>