<!DOCTYPE html>
<html>

<head></head>

<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen=["Elok Nur Hamdana","Unggu Pamenang","Bagas Nugraha"];

    echo $Listdosen[2] . "<br>";
    echo $Listdosen[1] . "<br>";
    echo $Listdosen[0] . "<br>";

    echo "Menampilkan dengan for loop" . "<br>";
    foreach ($Listdosen as $arr) {
        echo $arr . "<br>";
    }
    ?>
</body>

</html>