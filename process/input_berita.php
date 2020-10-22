<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $gambar = saveImage($_FILES["gambar_sampul"]);
    $jadwal = date('Y-m-d H:i:s', strtotime($_POST["jadwal"]));
    $date_now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO master_berita(judul, gambar_sampul, konten, jadwal_terbit, created_at, created_by) VALUES ('$_POST[judul]', '$gambar','$_POST[konten]', '$jadwal', '$date_now', '$_SESSION[username]')";
    $query = $conn->query($sql);
    if($query === TRUE) {
        $_SESSION['success_message'] = "Data berhasil disimpan";
    } else {
        $_SESSION['success_message'] = "Ada kesalahan, data tidak disimpan\n".$conn->error;
    }
    header('Location: ../daftar_berita.php');
    exit();
}

function saveImage($image) {
    $check = getimagesize($image["tmp_name"]);
    if($check !== false) {
        $image_name = substr(md5(time()), 0, 16);
        $file_tmp = $image['tmp_name'];
        $x = explode('.', $image['name']);
        $ekstensi = strtolower(end($x));
        move_uploaded_file($file_tmp, '../file/'.$image_name.'.'.$ekstensi);
        return $image_name.'.'.$ekstensi;
    } else {
        die("<script>alert('Opps, Pastikan format gambar anda sesuai (JPG, JPEG, PNG)');window.history.back()</script>");
    }
}

header('Location: ../login.php');
?>