<?php
require '../includes/app.php';
use Model\Generos;
$generos = Generos::all();

require '../includes/templates/header.php';
?>
<h1 class="text-center">Listado de Géneros</h1>
<table class="table container table-bordered">
    <thead class="table-light">
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Genero</th>
            <th class="text-center">Fecha Creación</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($generos as $genero ) :?>
        <tr>
            <th class="text-center"> <?php echo $genero['idgeneros'] ?> </th>
            <th class="text-center"><?php echo $genero['nombre']   ?></th>
            <th class="text-center"><?php echo $genero['fechacreacion']   ?></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>