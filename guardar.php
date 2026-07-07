<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = "localhost";
$username = "root";
$password = "";
$database = "inventario_fares";

$conxion = new mysqli($server, $username, $password, $database);
if ($conxion->connect_error) {
    die("Conexión fallida: " . $conxion->connect_error);
}

$codigo       = $_POST['codigo'] ?? '';
$nom_producto = $_POST['nom-producto'] ?? '';
$costo        = $_POST['costo'] ?? 0;
$porc_venta   = $_POST['porc_venta'] ?? 0;
$precio_venta = $_POST['precio_venta'] ?? 0;
$stock        = $_POST['stock'] ?? 0;
$fecha        = $_POST['fecha'] ?? date("Y-m-d");

$imagen = "no-image.png";
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
    $imagen = basename($_FILES['imagen']['name']);
    $target_dir = "imagenes/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_dir . $imagen);
}

$sql = "INSERT INTO inventario (codigo, `nom-producto`, costo, porc_venta, precio_venta, imagen, stock, fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conxion->prepare($sql);

if ($stmt === false) {
    die("Error: " . $conxion->error);
}

$stmt->bind_param("ssdddssi", $codigo, $nom_producto, $costo, $porc_venta, $precio_venta, $imagen, $stock, $fecha);

if ($stmt->execute()) {
    echo "<h1>Producto guardado correctamente ✅</h1>";
    echo "<a href='index.html'>Volver</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conxion->close();