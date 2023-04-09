<?php

$dsn = "mysql:host=localhost;dbname=iteh2lb1var4";
$username = "root";
$pass = "";

try {
    $dbh = new PDO($dsn, $username, $pass);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>