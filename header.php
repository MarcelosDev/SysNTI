
<?php
    date_default_timezone_set('America/Maceio');
    $Ano = date('S');
?>
<!DOCTYPE html>
<html lang=" {{ str_replace('_', '-', app()->getLocale())}} ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marcelo Souza e Vitor Araujo">
    <!-- <meta http-equiv="cache-control" content="no-cache" /> -->
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="copyright" content="© NTI | GRUPO PIO DECIMO" />
    <title>Gerenciador de Toner/Impressora | Grupo Pio Décimo</title>
    <!-- ICONE BARRA DO SITE -->
    <link rel="shortcut icon" href="./img/logo.png" />

    <!-- GOOGLE WEB FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
</html>