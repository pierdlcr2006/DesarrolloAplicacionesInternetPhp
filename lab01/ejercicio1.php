<?php
require '../header.php';
require '../funciones.php';
$usuario = "";
$email = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['correo'] ;
}
?>

<form class="formulario" method="post">
    <div class="formulario-centrado">
        <label class="label" for="usuario">Usuario:</label>
        <input name="usuario" class="input" id="usuario" type="text" placeholder="Usuario" required>
        <label class="label" for="correo">Correo</label>
        <input name="correo" class="input" id="correo" type="email" placeholder="Correo" required>
        <input class="boton" type="submit" value="Enviar">
    </div>
    <div class="">
        <?php
        if ($usuario !== "" && $email !== ""): ?>
            <p class="resultado">Usuario: <?php echo $usuario ?></p>
            <p class="resultado">Email: <?php echo $email ?><p/>
        <?php endif?>
    </div>
</form>
