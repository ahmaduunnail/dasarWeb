<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = array();

    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (strlen($password) > 8) {
        $errors[] = "Password harus lebih dari 8 karakter.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }


    if (empty($errors)) {
        foreach ($variable as $key => $value) {
            echo $errors . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = $nama. Email = $email. Password = $password";
    }
}
