<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $kd_matkul = explode("|", $_POST["matkul"])[0];
    $nm_matkul = explode("|", $_POST["matkul"])[1];
    $sql = "INSERT INTO jadwal_kuliah(kd_mkul, nama_mkul, kd_dosen, jam, ruang_kelas, jumlah_mhs, tanggal_mulai) VALUES ('$kd_matkul', '$nm_matkul','$_POST[kd_dosen]', '$_POST[jam]', '$_POST[ruang_kelas]', '$_POST[jml_mahasiswa]','$_POST[tanggal_mulai]')";
    $query = $conn->query($sql);
    if($query === TRUE) {
        $_SESSION['success_message'] = "Data berhasil disimpan";
    } else {
        $_SESSION['success_message'] = "Ada kesalahan, data tidak disimpan\n".$conn->error;
    }
    header('Location: ../index.php');
}

header('Location: ../login.php');
?>