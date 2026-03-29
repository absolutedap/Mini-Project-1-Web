<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "portfolio_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function fetchOneRow($query) {
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die(mysqli_error($conn));
    }

    return mysqli_fetch_assoc($result);
}

function fetchAllRows($query) {
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die(mysqli_error($conn));
    }

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}