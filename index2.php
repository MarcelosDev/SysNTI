<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Toner | NTI - Grupo Pio Décimo</title>
</head>
<body>
    <?php
      if(!isset($_SESSION['login'])){
        include('login.php');
      }
      else{
        if(isset($_GET['logout'])){
            unset($_SESSION['login']);
            session_destroy();
            header('location: index2.php');
        }
        include('home.php');
      }
    ?>

</body>
</html>