<?php

require "db_function.php";

$result = mysqli_query($conn, "SELECT * FROM siswas");

if (isset($_GET['id'])) {
    hapus($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="/belajarphp/crud/create.php">
        <button>Tambah Data</button>
    </a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $i=1; while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['telepon'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">edit</a>
                        <a href="index.php?id=<?= $row['id'] ?>">delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>