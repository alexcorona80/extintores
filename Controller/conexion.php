<?php
// Configuración de conexión
$servidor = "localhost";       // Puede ser "localhost" o la IP de tu servidor
$usuario = "root";       // El nombre de usuario de tu base de datos
$contrasena = "1234"; // La contraseña de tu base de datos
$base_datos = "world"; // El nombre de la base de datos

try {
    // Crear la conexión usando PDO
    $conn = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contrasena);

    // Configurar el modo de errores de PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>
