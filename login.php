<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['hobby'])) {
        // Ambil data dari kontak
        $hobbies = $_POST['hobby'];

        // Cek apakah hobi lebih dari 1
        if (count($hobbies) > 1) {
            // Gabungkan dengan koma
            $hobi_terakhir = array_pop($hobbies);
            $strHobby = implode(", ", $hobbies) . " dan " . $hobi_terakhir;
        } else {
            $strHobby = $hobbies[0];
        }
        echo "Nama: " . htmlspecialchars($_POST['nama']) . "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Jenis Kelamin: " . htmlspecialchars($_POST['gender']) . "<br>";
        echo "Tanggal Lahir: " . htmlspecialchars($_POST['birthday']) . "<br>";

        echo "Hobi saya adalah $strHobby<br>";
    } else {
        echo "Tidak ada hobi yang dipilih.<br>";
    }

    // Data lain

} else {
    echo "Form belum disubmit.";
}
?>
<a href="Kontak.php">Back</a>
