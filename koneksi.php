<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pemograman";

// Create connection
$koneksi = new mysqli($host, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
