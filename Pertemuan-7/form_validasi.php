<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <h1>Form input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">

        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(e) {
                var nama = $('#nama').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var valid = true;

                if (nama === "") {
                    $('#nama-error').text("Nama harus diisi.");
                    valid = false;
                } else {
                    $('#nama-error').text("");
                }

                if (password.length > 8) {
                    $('#password-error').text("Password harus lebih dari 8 karakkter.");
                    valid = false;
                } else {
                    $('#password-error').text("");
                }

                if (email === "") {
                    $('#email-error').text("Email harus disii.");
                    valid = false;
                } else {
                    $('#email-error').text("");
                }

                if (valid) {
                    event.preventDefault();

                    var formData = $('#myForm').serialize();

                    $.ajax({
                        url: "./proses_validasi.php",
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            $('#hasil').html(response);
                        }
                    })
                }
            })
        })
    </script>
</body>

</html>