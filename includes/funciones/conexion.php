<?php
    $mysqli = new mysqli("localhost", "root", "root", "gdlweb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
?>
<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
