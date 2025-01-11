<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=fkstore", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "!!!: " . $e->getMessage();
    die();
}

?>