<?php
  session_start();
  if(!isset($_SESSION['login'])){
    include('login.php');
  }
  else{
    if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        session_destroy();
        header('location: index.php');
    }
    include('home-geral.php');
  }
?>