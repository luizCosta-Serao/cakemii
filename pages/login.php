<div class="bg-inicio"></div>

<section class="login">
  <h1 class="title">Login</h1>
  
  <?php
    if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      if (
        $email === '' ||
        $senha === ''
      ) {
        Geral::alert('erro', 'Preencha todos os campos para fazer login');
      } else {
        Login::login($email, $senha);
      }
    }
  ?>

  <form action="" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">

    <input type="submit" name="login" value="Login">
  </form>
</section>