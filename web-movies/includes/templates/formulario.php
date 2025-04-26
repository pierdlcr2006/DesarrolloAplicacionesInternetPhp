<?php
require 'header.php';
?>
<div class="col-md-12">
    <label  class="form-label">Titulo</label>
    <input type="text" name="titulo" class="form-control" value="<?php echo escaparHtml($peliculas->titulo)?>" >
</div>
<div class="col-md-4">
    <label  class="form-label">Género</label>
    <select name="idgenero"  class="form-select">
        <option disabled selected >--Seleccione--</option>
        <?php foreach($generos as $genero): ?>
            <option value="<?php echo $genero->id ?>"> <?php echo $genero->nombre?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="col-md-4">
    <label class="form-label">Año de estreno</label>
    <input name="anolanzamiento" type="date" class="form-control" value="<?php echo escaparHtml($peliculas->lanzamiento) ?>">
</div>
<div class="col-md-4">
    <label class="form-label">Duración</label>
    <input name="duracion" type="text" class="form-control" value="<?php echo escaparHtml($peliculas->duracion) ?>">
</div>
<div class="col-md-4">
    <label  class="form-label">Premios</label>
    <input name="premios" type="text" class="form-control" value="<?php echo escaparHtml($peliculas->premio) ?>">
</div>
<div class="col-md-4">
    <label  class="form-label">Rating</label>
    <input name="rating" type="text" class="form-control" value="<?php echo escaparHtml($peliculas->rating) ?>">
</div>
<div class="col-md-4">
    <label class="form-label">Póster</label>
    <input name="logo" type="file" class="form-control">

</div>
<div class="col-12">
    <input class="btn btn-primary" type="submit" value="Registrar Película">
</div>

