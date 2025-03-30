<?php
require '../funciones.php';
$errores = [];
$nombre = '';
$direccion = '';
$correo = '';
$edad = '';
$a = '';

$comprobar = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enviar = $_POST['enviar'] ?? '';
    $clean = $_POST['clean'] ?? '';

    if ($enviar) {
        $nombre = $_POST['nombre'] ;
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $edad = $_POST['edad'];

        $comprobar = filter_var($edad, FILTER_VALIDATE_INT);

        if (!$nombre && !$direccion && !$correo && !$edad) {
            $errores[] = "Debe rellanar los campos";
        }
        else{
            if (!$nombre) {
                $errores[] = "El nombre es obligatorio";
            }
            if (!$direccion) {
                $errores[] = "La direccion es obligatoria";
            }
            if (!$correo) {
                $errores[] = "El correo es obligatorio";
            }
            if (!$edad) {
                $errores[] = "La edad es obligatoria";
            }elseif (!$comprobar) {
                $errores[] = "Debe agregar una edad válida";
            }elseif($edad < 18){
                $errores[] = "Debe ser mayor a 18";
            }
        }
        if  (empty($errores)) {
            header("Location: asd.php?name=$nombre&direccion=$direccion&edad=$edad&corre=$correo");
        }
    }
    if ($clean){
        $_POST['nombre'] = '' ;
        $_POST['direccion'] = '';
        $_POST['correo']= '';
        $_POST['edad'] = '';
    }
}
require 'header.php';
?>


<body>
    <?php
        foreach ($errores as $error):?>
            <div class="container alert alert-danger w-50 mt-3">
                <p class="text-center fs-5"><?php echo $error; ?></p>
            </div>
    <?php endforeach;?>

    <div class="container form-container rounded border border-1 mt-5 p-3">
        <div class="mb-3">
            <h2 class="text-center ">Datos de Usuario</h2>
        </div>
        <form method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre y Apellido</label>
                <input name="nombre" type="text" class="form-control" id="nombre" value="<?php echo $nombre ?>" placeholder="Nombre y Apellido">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input name="direccion" type="text" class="form-control" id="direccion" value="<?php echo $direccion ?>" placeholder="Ejm: Jr. , Av.">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">E-mail</label>
                <input name="correo" type="email" class="form-control" id="correo" value="<?php echo $correo ?> " placeholder="@correo.com">

            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input name="edad" class="form-control" id="edad" value="<?php echo $comprobar ? $edad : '' ?>" placeholder="Ejm: 18">

            </div>
            <input type="submit" name="enviar" class="btn btn-primary" value="Enviar">
            <input type="submit"  name="clean" class="btn btn-secondary" value="Limpiar">
        </form>
    </div>
</body>
</html>