<?php
require 'header.php';
require 'funciones.php';
$num1 = 0;
$num2 = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
}
?>

<form class="formulario" method="post">
    <div class="formulario-centrado">
        <label class="label" for="num1">Numero 1:</label>
        <input name="num1" class="input" id="num1" type="number" placeholder="Ejm: 2" required min="1">

        <label class="label" for="num2">Numero 2</label>
        <input name="num2" class="input" id="num2" type="number" placeholder="Ejm: 2" required min="1">

        <input class="boton" type="submit" value="Calcular">
    </div>
    <div>
        <?php
        if ($num1 > $num2 ) : ?>
            <p class="resultado">La suma de : <?php echo $num1. " + ".$num2." = ".  $num1 + $num2 ?></p>
            <p class="resultado">La diferencia de : <?php echo $num1. " - ".$num2." = ".  $num1 - $num2 ?></p>
        <?php
        elseif ($num1 < $num2 ) : ?>
            <p class="resultado">El producto de : <?php echo $num1. " + ".$num2." = ".  $num1 * $num2 ?></p>
            <p class="resultado">La división de : <?php echo $num1. " / ".$num2." = ".  $num1 / $num2 ?></p>
        <?php endif?>
    </div>

</form>

