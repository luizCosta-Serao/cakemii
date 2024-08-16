<?php

  class Geral {
    public static function alert($tipo, $mensagem) {
      if ($tipo === 'sucesso') {
        echo '<p class="'.$tipo.'">'.$mensagem.'</p>';
      } else if ($tipo === 'erro') {
        echo '<p class="'.$tipo.'">'.$mensagem.'</p>';
      }
    }
  }

?>