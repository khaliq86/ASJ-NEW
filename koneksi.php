<?php
$DBHOST = "localhost";
$DBNAME = "biodata_mahasiswa";
$USERNAME = "root";
$PASSWORD = "";


try {
    $conn = new PDO("mysql:host=$DBHOST;dbname=$DBNAME", $USERNAME, $PASSWORD);
} catch (\Throwable $e) {
    echo "koneksi gagal, " . $e->getMessage();
}

?>