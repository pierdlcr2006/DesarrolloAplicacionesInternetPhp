<?php
require 'header.php';
require 'funciones.php';
$num1 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
}
?>

<form class="formulario" method="post">
    <div class="formulario-centrado">
        <label class="label" for="num1">Numero 1:</label>
        <input name="num1" class="input" id="num1" type="number" placeholder="Ejm: 2" required min="1">

        <label class="label" for="num2">Numero 2</label>
        <input name="num2" class="input" id="num2" type="number" placeholder="Ejm: 2" required min="1">
        <label class="label" for="num3">Numero 3</label>
        <input name="num3" class="input" id="num3" type="number" placeholder="Ejm: 2" required min="1">

        <label class="label" for="num4">Numero 4</label>
        <input name="num4" class="input" id="num4" type="number" placeholder="Ejm: 2" required min="1">

        <input class="boton" type="submit" value="Calcular">
    </div>
    <div>
        <?php
        if ($num1 !== 0 && $num2 !== 0 && $num3 !== 0 && $num4 !== 0) : ?>
            <p class="resultado">La suma de : <?php echo $num1. " + ".$num2." = ".  $num1 + $num2 ?></p>
            <p class="resultado">El producto de : <?php echo $num3. " * ".$num4." = ".  $num3 * $num4 ?><p/>
        <?php endif?>
    </div>

</form>

