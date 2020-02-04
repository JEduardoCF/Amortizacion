<?php
$mysqli = new mysqli("localhost", "urbante_admin", "Adm1n01!", "urbante_corridas");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    return false;
}
