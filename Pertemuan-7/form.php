<!DOCTYPE html>
<html>

<head>
    <title>Form Input PHP</title>
</head>

<body>
    <h2>Form Input PHP</h2>
    <form action="proses_form.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="Nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>