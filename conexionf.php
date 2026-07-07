<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";       // Usuario por defecto en XAMPP
$password = "";       // Contraseña por defecto vacía en XAMPP
$database = "ControlClientes";

// Crear la conexión utilizando mysqli
$conexion = mysqli_connect($host, $user, $password, $database);

// Validar si la conexión falló
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Configurar el conjunto de caracteres a UTF-8 para evitar problemas con tildes y eñes
mysqli_set_charset($conexion, "utf8");
?>