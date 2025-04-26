<?php

require '../funciones.php';
session_start();
$productos = $_SESSION["productos"] ?? [];
$id = $_GET["val"] ?? null;
require '../header.php';
?>
<?php if($id == 1):?>
    <div class="container mt-2 alert alert-success">
        <p class="text-center fs-4 ">Producto Creado</p>
    </div>
<?php endif ;?>
<h2 class="text-center mt-4">Productos Registrados</h2>

<div class="container">
    <a class="btn btn-outline-info" href="form_product.php" role="button">Registrar Producto</a>
    <a class="btn btn-outline-info" href="cerrar.php" role="button">Borrar Productos</a>
</div>

<table class="container mt-4 table table-bordered ">
    <thead>
        <tr class="text-center table-info">
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($productos)):?>
            <?php foreach ($productos as $product => $array): ?>
                <tr class="text-center table-secondary">
                <?php for ($i = 0;$i < count($array);$i++ ): ?>
                        <th><?php echo $array[$i]?></th>
                <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        <?php endif;?>
    </tbody>

</table>
