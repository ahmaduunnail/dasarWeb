<?php
session_start();

if (!empty($_SESSION['username'])) {
    require "../config/koneksi.php";
    require "../fungsi/pesan_kilat.php";
    require "../fungsi/anti_injection.php";

    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan telah berhasil diubah!");
        } else {
            pesan('danger', "Mengubah jabatan gagal, karena: " . mysqli_error($koneksi));
        }
        header("location:../index.php?page=jabatan");
    }
}
