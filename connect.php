<?php

$servername = "localhost";
$db = "promosyon";
$username = "root";
$password = "";

try {
    $db = new PDO("mysql:host=$servername;dbname=$db", "$username", "$password");
} catch ( PDOException $e ){
    print $e->getMessage();
}

