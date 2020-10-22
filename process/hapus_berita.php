<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $sql = "DELETE FROM master_berita WHERE id=$_POST[id_berita]";
    $query = $conn->query($sql);
    if($query === TRUE) {
        $_SESSION['success_message'] = "Data berhasil dihapus";
    } else {
        $_SESSION['success_message'] = "Ada kesalahan, data tidak terhapus\n".$conn->error;
    }
    header('Location: ../daftar_berita.php');
    exit();
}

header('Location: ../login.php');
?>