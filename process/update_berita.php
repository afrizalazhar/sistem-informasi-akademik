<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $gambar = '';
    if(is_uploaded_file($_FILES["gambar_sampul"]["tmp_name"])) {
        $gambar = saveImage($_FILES["gambar_sampul"]);
    }
    $jadwal = date('Y-m-d H:i:s', strtotime($_POST["jadwal"]));
    $date_now = date('Y-m-d H:i:s');
    if(!empty($gambar)){
        $sql = "UPDATE master_berita SET judul = '$_POST[judul]', gambar_sampul='$gambar', konten = '$_POST[konten]', jadwal_terbit = '$_POST[jadwal]' WHERE id = '$_POST[id]'";
    } else {
        $sql = "UPDATE master_berita SET judul = '$_POST[judul]', konten = '$_POST[konten]', jadwal_terbit = '$_POST[jadwal]' WHERE id = '$_POST[id]'";
    }
    
    $query = $conn->query($sql);
    if($query === TRUE) {
        $_SESSION['success_message'] = "Data berhasil diupdate";
    } else {
        $_SESSION['success_message'] = "Ada kesalahan, data tidak diupdate\n".$conn->error;
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