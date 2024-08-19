<?php

  class Painel {
    public static function isLogin() {
      return isset($_SESSION['login_painel']) ? true : false;
    }

    public static function generateSlug($str) {
      $str = mb_strtolower($str);
      $str = preg_replace('/(â|á|ã)/', 'a', $str);
      $str = preg_replace('/(ê|é)/', 'e', $str);
      $str = preg_replace('/(í|Í)/', 'i', $str);
      $str = preg_replace('/(ú)/', 'u', $str);
      $str = preg_replace('/(ó|ô|õ|Ô)/', 'o', $str);
      $str = preg_replace('/(_|\/|!|\?|#)/', '', $str);
      $str = preg_replace('/( )/', '-', $str);
      $str = preg_replace('/ç/', 'c', $str);
      $str = preg_replace('/(-[-]{1,})/', '-', $str);
      $str = preg_replace('/(,)/', '-', $str);
      $str = strtolower($str);
      return $str;
    }

    public static function imagemValida($imagem) {
      if (
        $imagem['type'] === 'image/jpeg' ||
        $imagem['type'] === 'image/jpg' ||
        $imagem['type'] === 'image/png'
      ) {
        return true;
      } else {
        return false;
      }
    }

    public static function uploadFile($file) {
      $formatoImagem = explode('.', $file['name'])[1];
      $nomeImagem = uniqid().'.'.$formatoImagem;
      if(move_uploaded_file($file['tmp_name'], BASE_DIR.'/uploads/'.$nomeImagem)) {
        return $nomeImagem;
      } else {
        return false;
      }
    }
  }

?>