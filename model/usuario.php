<?php
require('connection.php');

function get($email, $senha){
    $conn = getConnection();

    $sql = 'SELECT * FROM usuario WHERE email = ? AND senha = ?';
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $senha);

    $stmt->execute();

    if($stmt->rowCount() > 0){
        return true;
    }

    else{
        return false;
    }
}


?>