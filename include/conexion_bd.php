<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'portafolio';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
    echo('coneccion a la base de datos exitosa');

} catch (\Throwable $th) {
    var_dump($th);
}