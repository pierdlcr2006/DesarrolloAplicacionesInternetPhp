<?php
require 'footer.php';
require 'funciones.php';
$num1 = 0;
$num2 = 0;
$num3 = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = intval($_POST['num1'] );
    $num2  = intval($_POST['num2']);
    $num3  = intval($_POST['num3']);
}
?>

<form class="formulario" method="post">
    <div class="resultado">
        <?php
        if ($num1 > $num2 && $num1 > $num3) : ?>
            <p>El número mayor es: <?php echo $num1?></p>
        <?php
        elseif ($num2 > $num1 && $num2 > $num3) : ?>
            <p>El número mayor es: <?php echo $num2?></p>
        <?php
        elseif ($num3 > $num1 && $num3 > $num2) : ?>
            <p>El número mayor es: <?php echo $num3?></p>
        <?php endif ?>
    </div>
    <div class="formulario-centrado">
        <label class="label" for="num1">Numero 1:</label>
        <input name="num1" class="input" id="nota1" type="number" placeholder="Ejm: 2" required min="1" >

        <label class="label" for="num2">Numero 2</label>
        <input name="num2" class="input" id="num2" type="number" placeholder="Ejm: 2" required min="1" >

        <label class="label" for="num3">Numero 3</label>
        <input name="num3" class="input" id="num3" type="number" placeholder="Ejm: 2" required min="1" >
        <input class="boton" type="submit" value="Calcular">
    </div>


</form>

