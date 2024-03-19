<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => "Elok Nur Hamdana",
                'domisili' => "Malang",
                'jenis_kelamin' => "Perempuan"
            ];

            echo "Nama : {$Dosen['nama']} <br>";
            echo "Domisili : {$Dosen['domisili']} <br>";
            echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
        ?>

        <h3>Style table</h3>
        <table border="1">
            <thead>
                <tr>
                    <?php
                    foreach ($Dosen as $key => $value) {
                        echo "<th>{$key}</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($Dosen as $key => $value) {
                        echo "<td>{$value}</td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>