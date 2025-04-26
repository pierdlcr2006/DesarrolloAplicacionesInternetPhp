<?php
require '../../includes/app.php';

use Model\Generos;
use Model\Peliculas;
$id = $_GET['id'];
if (!validarNumero($id)) {
    header('location: ../../views/peliculas/index.php');
}
$peliculas = Peliculas::find($id);
if (!$peliculas) {
    header('location: ../../views/peliculas/index.php');
}
debuguear($peliculas->sincronizar());
$generos = Generos::all();

$errores = Peliculas::getErrores()

?>
<h1 class="text-center mt-4">Editar Película</h1>
<div class="container mt-4">
    <a class="btn btn-dark" href="peliculas.php">Regresar</a>
    <?php foreach ($errores as $error): ?>
        <div class="container mt-4 ">
            <div class="alert alert-danger col-md-6 text-center" role="alert">
                <?php  echo $error?>
            </div>
        </div>
    <?php endforeach; ?>

    <form class="row g-3 mt-4" method="post" enctype="multipart/form-data">
        <?php require '../../includes/templates/formulario.php' ?>
    </form>

</div>
