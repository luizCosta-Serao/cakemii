<?php
  if (isset($_GET['loggout'])) {
    session_destroy();
    header('Location: '.INCLUDE_PATH.'login');
  }
?>

<header class="header">
  <div class="logo">
    <img src="<?php echo INCLUDE_PATH; ?>assets/logo.svg" alt="CakeMii">
  </div>

  <button class="btn-menu"><img src="<?php echo INCLUDE_PATH ?>assets/menu.svg" alt="Menu"></button>
  <nav>
    <ul>
      <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
      <li><a href="<?php echo INCLUDE_PATH; ?>cardapio">Cardápio</a></li>
      <li><a href="#contato">Contato</a></li>
      <?php
        if(!@$_SESSION['login']) {
      ?>
        <li><a href="<?php echo INCLUDE_PATH; ?>registre-se">Registre-se</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>login">Login</a></li>
      <?php } else { ?>
        <p class="nome-usuario"><?php echo $_SESSION['nome']; ?></p>
        <a class="sair" href="<?php echo INCLUDE_PATH ?>login?loggout">Sair</a>
      <?php } ?>
      <li><a href="<?php echo INCLUDE_PATH; ?>carrinho"><img src="<?php echo INCLUDE_PATH; ?>assets/carrinho.svg" alt="Carrinho"></a></li>
    </ul>
  </nav>
</header>