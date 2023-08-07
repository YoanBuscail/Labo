<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Labo de la Gaufre</title>

    <!-- Getting bootstrap (and reboot.css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c86588d5fc.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/favicon.ico" href="<?= $assetsBaseUri ?>images/favicon.ico">

    <!-- We can still have our own CSS file -->
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>css/style.css">
    
</head>

<body>

<?php
// On inclut des sous-vues => "partials"
include __DIR__ . '/../partials/nav.tpl.php';
?>