<?php
function dbconnect() {
    try {        
        $dbhost = "localhost";
        $dbname = "floppers";
        $dbuser = "bit_academy";
        $dbpass = "bit_academy";
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $err) {
        echo "Database connection problem found, " . $err->getMessage();
        exit();
    }
}

?>