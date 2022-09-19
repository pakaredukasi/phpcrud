<?php 

$conn = mysqli_connect("localhost", "root", "", "db_11rpl1");
if (!$conn) {
    echo "gagal terkoneksi";
}

function tambah($nama, $kelas, $telepon){
    global $conn;
    
    $query = "INSERT INTO siswas VALUES (NULL, '".$nama."', '".$kelas."', '".$telepon."')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
}

function hapus($id){
    global $conn;
    $query = "DELETE FROM siswas WHERE id = ".$id."";
    mysqli_query($conn, $query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function edit($id){
    global $conn;
    $query = "SELECT * FROM siswas where id = ".$id."";
    $result = mysqli_query($conn, $query);

    var_dump(mysqli_fetch_assoc($result));
    
}

?>