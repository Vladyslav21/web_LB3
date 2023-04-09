<?php

include('connect.php');
$wardName = $_GET['wardName'];

try {
    
    $sqlSelect = "SELECT ward.name AS ward_name, nurse.name AS nurse_name
    FROM nurse
    JOIN nurse_ward ON nurse.id_nurse = nurse_ward.fid_nurse
    JOIN ward ON nurse_ward.fid_ward = ward.id_ward
    WHERE nurse.shift = ?";


    /*$sqlSelect = "SELECT ward.name AS ward_name, nurse.name AS nurse_name, nurse.shift AS nurse_shift
    FROM nurse
    JOIN nurse_ward ON nurse.id_nurse = nurse_ward.fid_nurse
    JOIN ward ON nurse_ward.fid_ward = ward.id_ward
    WHERE nurse.shift = ?";
    */

    $stmt = $dbh->prepare($sqlSelect);

    $stmt->bindValue(1,$wardName);
    $stmt->execute();
    $res = $stmt->fetchAll();

    //var_dump($res);
    echo "<table border='1'>";
    echo "<thead><th>Ward name</th><th>Nurse name</th></tr></thead>";
    echo "<thead>";

    foreach($res as $row){
        
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";

    }
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}

$dbh = null;