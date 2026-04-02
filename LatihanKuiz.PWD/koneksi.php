<?php
$conn = mysqli_connect("localhost", "root", "", "login_kucing");

if (!$conn) {
    echo("Koneksi gagal" . mysqli_connect_error());
} else {
    // echo("Koneksi berhasil");
}
?>