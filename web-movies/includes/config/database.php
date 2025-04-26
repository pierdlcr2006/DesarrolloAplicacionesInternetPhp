<?php
function connectDb(){
    $db = new mysqli("localhost", "root",
        "Pdlc2006_", "movies_Db",3306);
    if(!$db){
        echo "Error al conectar a la base de datos";
        exit;
    }return $db;
}
