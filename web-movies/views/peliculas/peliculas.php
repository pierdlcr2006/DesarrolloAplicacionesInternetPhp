<?php
require '../../includes/app.php';
use Model\Generos;
use Model\Peliculas;

$peliculas = Peliculas::all();
$generos = Generos::all();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id){
        header('Location: peliculas.php');
    }
}
require '../../includes/templates/header.php';
?>
<h1 class="text-center mt-4">Listado de Películas</h1>
<div class="container">
    <a class="btn btn-dark" href="crear.php">Agregar Película</a>
        <table class="table table-striped mt-4">
            <thead >
            <tr>

                <th class="text-center">Título</th>
                <th class="text-center">Año de lanzamiento</th>
                <th class="text-center">Género</th>

            </tr>
            </thead>
            <tbody>
                    <?php foreach ($peliculas as $pelicula): ?>
                        <tr>
                            <th class="text-center"><?php echo $pelicula->titulo?></th>

                            <th class="text-center"><?php echo $pelicula->lanzamiento?></th>
                            <?php foreach ($generos as $genero):?>
                                <?php if($genero->id == $pelicula->idGenero ):?>
                                <th class="text-center"><?php echo $genero->nombre ?></th>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <th>
                                <a class="btn btn-outline-success" href="">Ver</a>
                                <form method="post">
                                    <input class="btn btn-outline-danger" type="submit" value="Eliminar">
                                    <input name="id" type="hidden" value="<?php echo $pelicula->id?>">
                                </form>
                                <a class="btn btn-outline-warning" href="editar.php?id=<?php echo $pelicula->id ?>">Editar</a>
                            </th>
                        </tr>
                    <?php endforeach;?>

            </tbody>
        </table>
</div>