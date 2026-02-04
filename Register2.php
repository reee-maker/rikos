<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "rikos");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "SELECT * FROM akun WHERE nama='$nama'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Name already registered";
    } else {
        $sql = "INSERT INTO akun (nama, alamat, nik, jenis_kelamin, nomor_hp ,password, level) 
                VALUES ('$nama', '$alamat', '$nik', '$jenis_kelamin', '$nomor_hp' ,'$password', '$level')";

        if (mysqli_query($conn, $sql)) {
            header("location: Login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
