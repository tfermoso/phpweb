<?php
if (isset($_GET["dato"])) {
    include("conexion.php");
    // Recuperar los datos enviados por la petición AJAX
    $email = $_GET["dato"]; 
    $sql="select * from usuarios where email=?";
    $pstm=$conn->prepare($sql);
    $pstm->bindParam(1,$email);
    $pstm->execute();
    if($pstm->rowCount()>0){
        echo "hola";// json_encode(['error' => 'Email duplicado']);
        exit();
    }else{
        echo json_encode(['error' => '']);
        exit();
    }
}

?>
