<?php

  class Login {
    public static function isLogin() {
      return isset($_SESSION['login']) ? true : false;
    }

    public static function login($email, $senha) {
      $sql = MySql::connect()->prepare("SELECT * FROM `usuarios` WHERE email = ? AND senha = ?");
      $sql->execute(array($email, $senha));
      if($sql->rowCount() === 1) {
        $_SESSION['login'] = true;
        $dadosUsuario = $sql->fetch();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $dadosUsuario['nome'];
        $_SESSION['id'] = $dadosUsuario['id'];
        $_SESSION['imagem_perfil'] = $dadosUsuario['imagem_perfil'];
        header('Location: '.INCLUDE_PATH);
      } else {
        Geral::alert('erro', 'Email ou senha incorretos');
      }
    }
  }

?>