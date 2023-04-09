<?php

include('connect.php');
$nurseDepartment = $_GET['nurseDepartment'];

try {
    
    $sqlSelect = "SELECT nurse.name, department
    FROM nurse
    WHERE nurse.department = ?";

    $stmt = $dbh->prepare($sqlSelect);

    $stmt->bindValue(1,$nurseDepartment);
    $stmt->execute();
    $res = $stmt->fetchAll();

    //var_dump($res);
    echo "<table border='1'>";
    echo "<thead><th>Nurse name</th><th>Department</th></tr></thead>";
    echo "<thead>";

    foreach($res as $row){
        
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";

    }
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}

$dbh = null;