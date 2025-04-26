<?php
require '../../includes/app.php';
use Model\Generos;
use Model\Peliculas;
use Intervention\Image\ImageManager as Image ;
use Intervention\Image\Drivers\Gd\Driver;

$errores = Peliculas::getErrores();
$generos = Generos::all();
$peliculas = new Peliculas;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $peliculas = new Peliculas($_POST);
    $nombreImagen = md5(uniqid(rand(), true)).".jpg";
    if ($_FILES['logo']['tmp_name']){
        $manager = new Image(Driver::class);
        $imagen = $manager->read($_FILES['logo']['tmp_name'])->cover(600,820);
        $peliculas->setImagen($nombreImagen);
    }
    $errores =  $peliculas->validar();
    if (!$errores) {
        if(!is_dir(CARPETA_IMAGENES)){
            mkdir(CARPETA_IMAGENES);
        }
        $imagen->save(CARPETA_IMAGENES.$nombreImagen);
        $resultado = $peliculas->save();
        debuguear($resultado);
    }
}
?>
<h1 class="text-center mt-4">Registrar Película</h1>


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