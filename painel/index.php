<?php

  include('../config.php');

  if (Painel::isLogin() === false) {
    include('login.php');
  } else {
    include('painel.php');
  }

?>