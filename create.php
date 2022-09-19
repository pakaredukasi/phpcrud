<?php
require "db_function.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];

    tambah($nama, $kelas, $telepon);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Nama : </label>
        <input required type="text" name="nama" id="nama">
        <br>
        <label for="kelas">Kelas : </label>
        <select required name="kelas" id="kelas">
            <option selected disabled>--- Pilih Kelas ---</option>
            <option value="11 RPL 1">11 RPL 1</option>
            <option value="11 RPL 2">11 RPL 2</option>
        </select>
        <br>
        <label for="telepon">Telepon : </label>
        <input required type="text" name="telepon" id="telepon">
        <br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>