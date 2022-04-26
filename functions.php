<?php



function getSongs($pdo){
    $sql = "SELECT * FROM songs WHERE 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($res);
}


