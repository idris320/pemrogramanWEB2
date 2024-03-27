<hr size="2">
<h2>Deret Bilangan Genap Habis Dibagi 3</h2>
    <form method="post">
        <label for="nilaiAwal">Nilai Awal:</label>
        <input type="number" id="nilaiAwal" name="nilaiAwal" required><br><br>

        <label for="nilaiAkhir">Nilai Akhir:</label>
        <input type="number" id="nilaiAkhir" name="nilaiAkhir" required><br><br>

        <button type="submit">Tampilkan</button>
    </form>

    <?php
    // Fungsi untuk menampilkan deret bilangan genap yang habis dibagi 3
    function tampilkanDeret($awal, $akhir) {
        $jumlahDeret = 0;
        $jumlahBilangan = 0;

        // Mengecek apakah $awal merupakan bilangan genap
        if ($awal % 2 != 0) {
            $awal++; // Jika ganjil, ditambahkan 1 agar menjadi genap
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