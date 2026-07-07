<?php
// 1. Incluir el archivo de conexión
require 'conexionf.php';

// 2. Verificar que los datos del formulario se hayan enviado por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recibir y limpiar las variables del formulario para evitar inyecciones SQL básicas
    $codigo     = mysqli_real_escape_string($conexion, $_POST['ccodigo']);
    $nombre     = mysqli_real_escape_string($conexion, $_POST['cnomcliente']);
    $direccion  = mysqli_real_escape_string($conexion, $_POST['cdireccion']);
    $telefono   = mysqli_real_escape_string($conexion, $_POST['ctelcasa']);
    $celular    = mysqli_real_escape_string($conexion, $_POST['ccelular']);
    $email      = mysqli_real_escape_string($conexion, $_POST['cemail']);

    // 3. Preparar la consulta SQL de inserción
    $sql = "INSERT INTO clientes (ccodigo, cnomcliente, cdireccion, ctelcasa, ccelular, cemail) 
            VALUES ('$codigo', '$nombre', '$direccion', '$telefono', '$celular', '$email')";

    // 4. Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conexion, $sql)) {
        echo "<script>
                alert('¡Cliente guardado exitosamente!');
                window.location.href = 'frmcliente.php';
              </script>";
    } else {
        echo "Error al guardar el registro: " . mysqli_error($conexion);
    }

    // 5. Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si intentan entrar directo al archivo sin pasar por el formulario, los redirige
    header("Location: frmcliente.php");
    exit();
}
?>