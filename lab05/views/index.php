<?php
require '../process/objeto_alumno.php';
require '../process/objeto_docente.php';
require '../../header.php';
?>
<div class="container mt-4">
    <div class="row ">
        <div class="col-6 border border-primary border-3 rounded">
            <h2 class="text-center">Alumno</h2>
            <p class="fs-5"><span class="fw-bold">Nombre: </span><?php echo $alumno->getNombre()?> </p>
            <p class="fs-5"><span class="fw-bold">Apellido: </span><?php echo $alumno->getApellido()?> </p>
            <p class="fs-5"><span class="fw-bold">Nota 1: </span><?php echo $alumno->getNota1()?> </p>
            <p class="fs-5"><span class="fw-bold">Nota 2: </span><?php echo $alumno->getNota2()?> </p>
            <p class="fs-5 fw-bold">Promedio: <?php echo $alumno->promedio()?> </p>
        </div>
        <div class="col-6 border border-warning border-3 rounded">
            <h2 class="text-center">Profesor</h2>
            <p class="fs-5"><span class="fw-bold">Nombre: </span><?php echo $docente->getNombre()?> </p>
            <p class="fs-5"><span class="fw-bold">Apellido: </span><?php echo $docente->getApellido()?> </p>
            <p class="fs-5"><span class="fw-bold">Horas: </span><?php echo $docente->getHoras()?> </p>
            <p class="fs-5"><span class="fw-bold">Tarifa: </span><?php echo $docente->getTarifa()?> </p>
            <p class="fs-5 fw-bold">Pago Total: <?php echo $docente->calcularTarifa()?> </p>
        </div>
    </div>
</div>