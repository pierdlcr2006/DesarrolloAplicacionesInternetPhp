<?php
define('CARPETA_IMAGENES',__DIR__."/../imagenes/");
function debuguear($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
function escaparHtml($html){
    if (!$html)return;
    $sanitizado = htmlspecialchars($html);
    return $sanitizado;
}
function validarNumero($numero){
    $num = filter_var($numero, FILTER_VALIDATE_INT);
    return $num;
}