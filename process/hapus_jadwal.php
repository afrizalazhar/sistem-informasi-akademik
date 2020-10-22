<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $sql = "DELETE FROM jadwal_kuliah WHERE id=$_POST[id_jadwal]";
    $query = $conn->query($sql);
    if($query === TRUE) {
        $_SESSION['success_message'] = "Data berhasil dihapus";
    } else {
        $_SESSION['success_message'] = "Ada kesalahan, data tidak terhapus\n".$conn->error;
    }
    header('Location: ../index.php');
}

header('Location: ../login.php');
?>