<?php
require "include/header.php";
require __DIR__ . ('/include/conexion_bd.php');
?>


<main class="container">
    <form class="formulario" method="POST">
        <fieldset>
            <legend>Digite todos sus datos</legend>
            <div class="campos"></div>
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Digite nombre completo" required autofocus>
            </div>
            <div class="campo">
                <label for="tel">Teléfono</label>
                <input type="text" name="tel" id="tel" placeholder="Digite teléfono" required>
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Correo@gmail" required>
            </div>
            <div class="campo">
                <label for="men">Mensaje</label>
                <textarea name="mensaje" id="men" ></textarea>
            </div>
            <div>
                <input type="submit" value="enviar" class="btn">
            </div>
        </fieldset>
    </form>
</main>



<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
var_dump($mensaje);

$sql = "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$tel', '$email', '$mensaje')";

$pepito = mysqli_query($coneccion, $sql);

if ($pepito) {
    echo 'Datos guardados correctamente';
} else {
    echo 'Error al guardar los datos' . mysqli_error($coneccion);
}


mysqli_close($coneccion);
}


include 'include/footer.php';




?>