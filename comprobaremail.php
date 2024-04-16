<?php
if(isset($_POST["dato"])){
    include("conexion.php");
    $email=$_POST["dato"];
    $sql="select * from usuarios where email=?";
    $pstm=$conn->prepare($sql);
    $pstm->bindParam(1,$email);
    $pstm->execute();
    if($pstm->rowCount()>0){
        echo json_encode(["error" => "Email duplicado"]);
    }else{
        echo json_encode(["error" => ""]);
    }

}

?>
