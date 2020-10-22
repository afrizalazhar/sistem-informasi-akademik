<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $kd_matkul = explode("|", $_POST["matkul"])[0];
    $nm_matkul = explode("|", $_POST["matkul"])[1];
    $sql = "UPDATE jadwal_kuliah SET kd_mkul = '$kd_matkul', nama_mkul = '$nm_matkul', kd_dosen = '$_POST[kd_dosen]', jam = '$_POST[jam]', ruang_kelas = '$_POST[ruang_kelas]', jumlah_mhs = '$_POST[jml_mahasiswa]', tanggal_mulai = '$_POST[tanggal_mulai]' WHERE id = '$_POST[id]'";
    $query = $conn->query($sql);
    if($query === TRUE) {
        $_SESSION['success_message'] = "Data berhasil diupdate";
    } else {
        $_SESSION['success_message'] = "Ada kesalahan, data tidak diupdate\n".$conn->error;
    }
    header('Location: ../index.php');
}

header('Location: ../login.php');
?>