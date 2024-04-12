<?php
include "auth.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">

    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.min.css">

    <title>Data Anggota</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
            CRUD Dengan Ajax
        </a>
    </nav>

    <div class="container mt-4">
        <h2 align="center" style="margin: 30px;">Data Anggota</h2>

        <form class="form-data" id="form-data" method="post">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-Laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Prempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label>No. Telp</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>


            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>
        <hr>

        <div class="data"></div>

    </div>
    <div class="text-center">© <?php echo date('Y'); ?> Copyright:
        <a href="https://googlec.com">Desain Pemograman Web</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('.data').load('data.php')

            $("#simpan").click(function() {
                var data = $(".form-data").serialize();
                var jenkel1 = document.getElementById("jenkel1").value
                var jenkel2 = document.getElementById("jenkel2").value
                var nama = document.getElementById("nama").value
                var alamat = document.getElementById("alamat").value
                var no_telp = document.getElementById("no_telp").value

                if (nama == "") {
                    document.getElementById("err_nama").innerHTML = "Nama Harus Diisi!!"
                } else {
                    document.getElementById("err_nama").innerHTML = ""
                }

                if (alamat == "") {
                    document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi!!"
                } else {
                    document.getElementById("err_alamat").innerHTML = ""
                }
                
                if (document.getElementById("jenkel1").checked == false && document.getElementById("jenkel2").checked == false) {
                    document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Dipilih!!"
                } else {
                    document.getElementById("err_jenis_kelamin").innerHTML = ""
                }

                if (no_telp == "") {
                    document.getElementById("err_no_telp").innerHTML = "No Telpon Harus Diisi!!"
                } else {
                    document.getElementById("err_no_telp").innerHTML = ""
                }

                if (nama != "" && alamat != "" && (document.getElementById("jenkel1").checked == true || document.getElementById("jenkel2").checked == true) && no_telp != "") {
                    $.ajax({
                        type: 'POST',
                        url: "form_action.php",
                        data: data,
                        success: function(response) {
                            $('.data').load("data.php")
                            document.getElementById("id").value = ""
                            document.getElementById("form-data").reset()
                        },
                        error: function(response) {
                            console.log(response.responseText)
                        }
                    })
                }
            })
        })
    </script>
</body>

</html>