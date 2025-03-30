<?php
    require '../funciones.php';
    require 'header.php';
    $name = $_GET["name"];
    $direccion = $_GET["direccion"];
    $edad = $_GET["edad"];
    $correo = $_GET["corre"];

?>

<div class="container form-container rounded border border-1 mt-5 p-3">
    <div class="mb-3">
        <h2 class="text-center ">Bienvenido</h2>
    </div>
    <p class="fs-5">Hola <?php echo $name?> !</p>
    <p class="fs-5">Tu dirección es <?php echo $direccion?></p>
    <p class="fs-5">Tiene <?php echo $edad?> años</p>
    <p class="fs-5">Tu correo es <?php echo $correo?></p>
    <p class="fs-5"></p>
</div>
