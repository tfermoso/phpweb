<?php
if (isset($_GET["email"])) {
    include("conexion.php");
    $email = $_GET["email"];
    // Crear un array PHP con los datos que deseas enviar como JSON


    // Recuperar los datos enviados por la petición AJAX

    $sql = "select * from usuarios where email=?";
    $pstm = $conn->prepare($sql);
    $pstm->bindParam(1, $email);
    $pstm->execute();
    if ($pstm->rowCount() > 0) {
        $respuesta = array(
            'mensaje' => 'Email duplicado',
            'resultado' => $email,
            'estado' => 'OK'
        );
    } else {
        $respuesta = array(
            'mensaje' => '',
            'resultado' => $email,
            'estado' => 'OK'
        );
    }

    // Convertir el array en formato JSON
    $respuesta_json = json_encode($respuesta);

    // Establecer las cabeceras HTTP para indicar que la respuesta es JSON
    header('Content-Type: application/json');
    // Enviar la respuesta JSON al cliente
    echo $respuesta_json;
}
