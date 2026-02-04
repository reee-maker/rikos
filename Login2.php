<?php
session_start();
$nama = $_POST['nama'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "rikos");

$query = "SELECT * FROM akun WHERE nama='$nama' && password='$password'";
$login = mysqli_query($conn, $query);
$isLogin = mysqli_num_rows($login);

if (isset($_POST['submit'])) {
    if ($isLogin > 0) {
        $data = mysqli_fetch_assoc($login);
        $_SESSION['user'] = $nama;

        if ($data['level'] == 1) {
            $_SESSION['level'] = $data['level'];
            header("Location: aslab/index.php");
        } else {
            if ($data['jenis_kelamin'] == 'laki-laki') {
                header("Location: userL/index.php");
            } else if ($data['jenis_kelamin'] == 'perempuan') {
                header("Location: userP/index.php");
            } else {
                $msg = "<p class='alert alert-danger'>Jenis kelamin tidak valid.</p>";
                header("Location: Login.php?msg=" . urlencode($msg));
                exit;
            }
        }
    } else {
        $msg = "<p class='alert alert-danger'>Nama / password salah.</p>";
        header("Location: Login.php?msg=" . urlencode($msg));
        exit;
    }
}
?>
