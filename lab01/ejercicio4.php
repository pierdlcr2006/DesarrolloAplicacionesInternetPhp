<?php
require 'footer.php';
require 'funciones.php';
$resultado = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suma = 0;
    $notas[] = intval($_POST['nota1'] );
    $notas[]  = intval($_POST['nota2']);
    $notas[]  = intval($_POST['nota3']);
    foreach ($notas as $value ) {
        $suma += $value;
    }
    $resultado = $suma / count($notas);
}
?>

<form class="formulario" method="post">
    <div class="resultado res-pos">
        <?php
        if ($resultado >= 13) { ?>
            <p>Alumno Aprobado</p>
        <?php } ?>
    </div>
    <div class="resultado res-neg" >
        <?php if ($resultado !== 0 && $resultado < 13) { ?>
            <p>Alumno Reprobado</p>
        <?php } ?>
    </div>
    <div class="formulario-centrado">
        <label class="label" for="nota1">Nota 1:</label>
        <input name="nota1" class="input" id="nota1" type="number" placeholder="Ejm: 2" required min="1" max="20">

        <label class="label" for="nota2">Nota 2</label>
        <input name="nota2" class="input" id="nota2" type="number" placeholder="Ejm: 2" required min="1" max="20">

        <label class="label" for="nota3">Nota 3</label>
        <input name="nota3" class="input" id="nota3" type="number" placeholder="Ejm: 2" required min="1" max="20">
        <input class="boton" type="submit" value="Calcular">

        <?php
        if ($resultado !== 0) :?>
            <p> <span>Promedio:  <?php echo $resultado?> </span></p>

        <?php endif ?>
    </div>


</form>

