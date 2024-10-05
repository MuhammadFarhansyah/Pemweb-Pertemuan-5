<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>

    <!-- Navigation Links -->
    <h2>
        <a href="Home.php">Home</a> 
        <a href="About.php">About</a> 
        <a href="Kontak.php">Contact</a>
    </h2>

    <!-- Form -->
    <form action="login.php" method="POST">
        <!-- Nama -->
        <label for="name">Nama:</label>
        <input type="text" id="name" name="nama" placeholder="Nama kalian"><br><br>

        <!-- Email (should not be password) -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email"><br><br>

        <!-- Hobby -->
        <label>Hobby:</label><br>
        <input type="checkbox" id="membaca" name="hobby[]" value="Membaca">
        <label for="membaca">Membaca</label><br>
        <input type="checkbox" id="melukis" name="hobby[]" value="Melukis">
        <label for="melukis">Melukis</label><br>
        <input type="checkbox" id="olahraga" name="hobby[]" value="Olahraga">
        <label for="olahraga">Olahraga</label><br><br>

        <!-- Jenis Kelamin -->
        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki-laki" name="gender" value="Laki-Laki">
        <label for="laki-laki">Laki-Laki</label><br>
        <input type="radio" id="perempuan" name="gender" value="Perempuan">
        <label for="perempuan">Perempuan</label><br><br>

        <!-- Tanggal Lahir -->
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br><br>

        <!-- Buttons -->
        <input type="submit" name="submit" value="Kirim">
        <input type="reset" value="Hapus">
    </form>

</body>
</html>
