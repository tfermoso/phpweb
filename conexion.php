<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL está en otro lugar
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = "1234"; // Cambia esto por tu contraseña de MySQL
$database = "usuarios"; // Cambia esto por el nombre de tu base de datos
try {
    // Crear conexión
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa";
    // Aquí puedes ejecutar consultas y otras operaciones en la base de datos
   /*
    $email = "tomas@gmail.com";
    $pass = "1234";
    $sql = "select * from usuarios where email=? and password=?";
    $stmt = $conn->prepare($sql);
    // Vincular parámetros
    $stmt->bindParam(1,$email);
    $stmt->bindParam(2,$pass);
    // Ejecutar la consulta
    $stmt->execute();
    // Obtener resultados
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    exit();
   */
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
