<?php
require "Producto.php";
require "../funciones.php";

$errores = [];

$precio ="";
$categoria ="";
$nombre ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $categoria = $_POST["categoria"];
    if (!$nombre && !$precio && !$categoria) {
        $errores[] = "Porfavor rellene los campos";
    }else{
        if (!$nombre) {
            $errores[] = "Porfavor agregue un nombre";
        }
        if (!$precio) {
            $errores[] = "Porfavor agregue un precio";
        }
        if (!$categoria) {
            $errores[] = "Porfavor agregue una categoria";
        }
    }
    if (!$errores) {
        session_start();
        $producto = new Producto(ucfirst(($nombre)), $precio, ucfirst($categoria));
        $array = [$producto->getNombre(), $producto->getPrecio(), $producto->getCategoria()];
        $_SESSION["productos"][] = $array;
        header("location: index.php?val=1");
    }


}
require "../header.php"
?>
<?php foreach ($errores as $error): ?>
    <div class="container mt-2 alert alert-danger">
        <p class="text-center fs-4"><?php echo $error ?></p>
    </div>
<?php endforeach; ?>

<h2 class="text-center mt-4">Crear un Producto</h2>
<div class="container">
    <a class="btn btn-outline-info" href="index.php" role="button">Volver</a>
</div>
<form class="container mt-2 p-3 border border-info border-3 rounded-4" method="post">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $nombre?> ">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input name="precio" type="number" class="form-control" id="precio" placeholder="Precio" value="<?php echo $precio?>" >
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <input name="categoria" type="text" class="form-control" id="categoria" placeholder="Categoría" value="<?php echo $categoria?>">
    </div>
    <div class="d-grid  col-2 mx-auto">
        <input value="Enviar" class="btn btn-info" type="submit">
    </div>
</form>