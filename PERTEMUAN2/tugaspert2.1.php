<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PERTEMUAN 2.1</title>
</head>

<body>
    <h2>Menghitung Nilai Siswa</h2>
    <form method="post">
        <label for="nilaiTugas">Nama :</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nilaiTugas">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>        

        <label for="nilaiTugas">Nilai Tugas:</label>
        <input type="number" id="nilaiTugas" name="nilaiTugas" required><br><br>

        <label for="nilaiUTS">Nilai UTS:</label>
        <input type="number" id="nilaiUTS" name="nilaiUTS" required><br><br>

        <label for="nilaiUAS">Nilai UAS:</label>
        <input type="number" id="nilaiUAS" name="nilaiUAS" required><br><br>

        <button type="submit" name="hitung">Hitung Nilai Akhir</button>
    </form>
    <br><br>
    <h3>HASIL</h3>

    <?php
    // Periksa apakah tombol submit telah ditekan
    if (isset($_POST['hitung'])) {
        // Ambil nilai dari input
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilaiTugas = $_POST['nilaiTugas'];
        $nilaiUTS = $_POST['nilaiUTS'];
        $nilaiUAS = $_POST['nilaiUAS'];

        // Hitung nilai akhir dengan bobot 20% tugas, 30% UTS, dan 50% UAS
        $nilaiAkhir = ($nilaiTugas * 0.2) + ($nilaiUTS * 0.3) + ($nilaiUAS * 0.5);
        $nilaiRataRata = ($nilaiTugas + $nilaiUTS + $nilaiUAS) / 3;
             
    echo "<table>";
        echo "<tr>";
            echo "<td>Nama : $nama</td>";
            echo "<td> </td>";
            echo "<td>Jurusan : $jurusan</td> ";
            echo "<td> </td>           ";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Nilai Tugas : $nilaiTugas</td>";
            echo "<td> </td>";
            echo "<td>Nilai UTS : $nilaiUTS</td> ";
            echo "<td> </td>           ";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Nilai UAS : $nilaiUAS</td>";
            echo "<td> </td>";
            echo "<td>Rata-rata : $nilaiRataRata</td> ";
            echo "<td> </td>           ";
        echo "</th>";
    echo "</table>";
    }
    ?>
</body>
</html>