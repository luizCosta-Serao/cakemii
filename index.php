<?php include('./config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css">
  <title>CakeMii | Home</title>
</head>
<body>
  <?php include('./header.php'); ?>

  <?php
    // Página dinâmica
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    if (file_exists('pages/'.$url.'.php')) {
      include('pages/'.$url.'.php');
    } else {
      include('pages/home.php');
    }
  ?>
  <script src="<?php echo INCLUDE_PATH ?>js/jquery.min.js"></script>
  <script type="module" src="<?php echo INCLUDE_PATH ?>js/script.js"></script>
</body>
</html>