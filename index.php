<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form action="form.php" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki" required>
        <label for="laki-laki">Laki-Laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="no_hp">No HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>

    <br>
    <a href="data.csv" download="data_mahasiswa.csv">Download Data Mahasiswa</a>

    <?php
    // Proses penyimpanan data ke CSV
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];

        // Buat array dengan data
        $data = array($nim, $nama, $jenis_kelamin, $alamat, $no_hp, $email);

        // Buka file CSV, jika belum ada maka buat baru
        $file = fopen("data.csv", "a");

        // Tulis data ke file CSV
        fputcsv($file, $data);

        // Tutup file
        fclose($file);

        echo "<p>Data berhasil disimpan!</p>";
    }
    ?>
</body>
</html>