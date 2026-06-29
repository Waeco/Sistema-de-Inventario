<?php require "./inc/session_start.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Sistema de inventario</title>


    <?php include "./inc/head.php"; ?>
</head>

<body>
    <?php
    //si no existe la vista o esta vacio la direccion redireccioname al login
    if (!isset($_GET["vista"]) || $_GET["vista"] == "") {
        $_GET["vista"] = "login";
    }
    if (is_file("./vistas/" . $_GET["vista"] . ".php") && $_GET["vista"] != "login" && $_GET["vista"] != "404") {
        include("./inc/navbar.php");
        include("./vistas/" . $_GET["vista"] . ".php");
        include "./inc/script.php";
    } else {
        if ($_GET["vista"] == 'login') {
            include './vistas/login.php';
        } else {
            include './vistas/404.php';
        }
    }
    ?>

</body>

</html>