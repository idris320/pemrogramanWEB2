<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>

<body>

    <h2>Kalkulator Sederhana</h2>

    <form method="post">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    // Periksa apakah tombol submit telah ditekan
    if (isset($_POST['hitung'])) {
        // Ambil nilai dari input
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        // Hitung hasil berdasarkan operator yang dipilih
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                // Periksa apakah angka kedua bukan nol (untuk menghindari pembagian oleh nol)
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Tidak bisa dibagi oleh nol";
                }
                break;
            default:
                $hasil = "Operasi tidak valid";
        }

        // Tampilkan hasil perhitungan
        echo "<p>Hasil: $hasil</p>";
    }
    ?>

</body>

</html>