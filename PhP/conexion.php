<?php
/*
$host = "localhost";// Nombre del host
$usuario = "root";              // Nombre de usuario
$contraseña = "";       // Contraseña
$base_datos = "panaviews";      // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

*/
// Configuración de conexión
$host = 'bdb7sbx26cvnng2lbiv9-mysql.services.clever-cloud.com';
$dbname = 'bdb7sbx26cvnng2lbiv9';
$username = 'ucyebez9xuaqeic8';
$password = 'qsng4TiRbXu0uB0vqVq5';
// Crear una nueva conexión PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Para manejar errores

?>
