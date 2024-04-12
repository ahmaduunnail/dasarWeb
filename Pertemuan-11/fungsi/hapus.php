<?php
session_start();

if (!empty($_SESSION['username'])) {
    require "../config/koneksi.php";
    require "../fungsi/pesan_kilat.php";
    require "../fungsi/anti_injection.php";

    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id='$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan telah terhapus!");
        } else {
            pesan('danger', "Jabatan tidak terhapus karena: " . mysqli_error($koneksi));
        }
        header("location:../index.php?page=jabatan");
    }
}
