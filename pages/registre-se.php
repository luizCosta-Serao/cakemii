<div class="bg-inicio"></div>

<section class="registre-se">
  <h1 class="title">Registre-se</h1>
  <?php
    if (isset($_POST['registrar'])) {
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $imagem_perfil = $_FILES['imagem_perfil'];

      if (
        $nome === '' ||
        $email === '' ||
        $senha === ''
      ) {
        Geral::alert('erro', 'Você deve preencher todos os campos');
      } else {
        if (Registrar::imagemValida($imagem_perfil)) {
          $imagem = Registrar::uploadFile($imagem_perfil);
          Registrar::register($nome, $email, $senha, $imagem);
          Geral::alert('sucesso', 'Cadastro realizado com sucesso');
        } else {
          Geral::alert('erro', 'Selecione uma imagem válida');
        }
      }
    }
  ?>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">

    <label for="imagem_perfil">Foto de perfil</label>
    <input type="file" name="imagem_perfil" id="imagem_perfil">

    <input type="submit" name="registrar" value="Registre-se">
  </form>
</section>