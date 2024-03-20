<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
</head>
<body>
    <h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <form method="post">
        <label for="nilaiAwal">Nilai Awal:</label>
        <input type="number" id="nilaiAwal" name="nilaiAwal" required><br><br>

        <label for="nilaiAkhir">Nilai Akhir:</label>
        <input type="number" id="nilaiAkhir" name="nilaiAkhir" required><br><br>

        <button type="submit">Tampilkan</button>
    </form>

    <?php
    // Fungsi untuk menampilkan deret bilangan ganjil yang habis dibagi 3
    function tampilkanDeret($awal, $akhir) {
        $jumlahDeret = 0;
        $jumlahBilangan = 0;

        // Mengecek apakah $awal merupakan bilangan ganjil
        if ($awal % 2 == 0) {
            $awal++; // Jika genap, ditambahkan 1 agar menjadi ganjil
        }

        for ($i = $awal; $i <= $akhir; $i += 2) {
            if ($i % 3 == 0) {
                echo $i . "<br>";
                $jumlahDeret++;
                $jumlahBilangan += $i;
            }
        }

        echo "Banyaknya deret bilangan: " . $jumlahDeret . "<br>";
        echo "Jumlah dari deret bilangan: " . $jumlahBilangan . "<br>";
    }

    // Memeriksa apakah formulir dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai awal dan akhir dari formulir
        $awal = $_POST['nilaiAwal'];
        $akhir = $_POST['nilaiAkhir'];

        // Memanggil fungsi untuk menampilkan deret bilangan
        tampilkanDeret($awal, $akhir);
    }
    ?>
</body>
</html>
