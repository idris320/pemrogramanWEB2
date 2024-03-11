<?php
const maxhadir = 18;
const bbthadir = 10;
const tugas = 20 / 100;
const uts = 30 / 100;
const uas = 40 / 100;

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $hadir = $_POST['kehadiran'];
    $nilai_tugas = $_POST['nilaiTugas'];
    $nilai_uts = $_POST['nilaiUTS'];
    $nilai_uas = $_POST['nilaiUAS'];

    $hitung_hadir = bbthadir;
    if ($hadir < maxhadir) {
        $hitung_hadir = round(bbthadir - (((maxhadir - $hadir) / maxhadir) * bbthadir), 2);
    }
    $hitung_tugas = $nilai_tugas * tugas;
    $hitung_uts = $nilai_uts * tugas;
    $hitung_uas = $nilai_uas * bbthadir;
    $nilai_akhir = $hitung_hadir + $hitung_tugas + $hitung_uts + $hitung_uas;


    $keterangan = "Lulus";
    if ($nilai_akhir <= 65) {
        $keterangan = "Tidak Lulus";
    }
    if ($nilai_akhir >= 80) {
        $grade = 'A';
    } else if ($nilai_akhir >= 70 && $nilai_akhir < 80) {
        $grade = 'B';
    } else if ($nilai_akhir >= 60 && $nilai_akhir < 70) {
        $grade = 'C';
    } else if ($nilai_akhir >= 50 && $nilai_akhir < 60) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 3.2</title>
</head>

<body>
    <h2>DATA SISWA</h2>

    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="matkul">Mata Kuliah:</label>
        <input type="text" id="matkul" name="matkul" required><br><br>

        <label for="jumHadir">Jumlah Kehadiran:</label>
        <input type="number" id="kehadiran" name="kehadiran" required><br><br>

        <label for="nilaiTugas">Nilai Tugas:</label>
        <input type="number" id="nilaiTugas" name="nilaiTugas" required><br><br>

        <label for="nilaiUTS">Nilai UTS:</label>
        <input type="number" id="nilaiUTS" name="nilaiUTS" required><br><br>

        <label for="nilaiUAS">Nilai UAS:</label>
        <input type="number" id="nilaiUAS" name="nilaiUAS" required><br><br>

        <button type="submit" name="submit">Hitung</button>
    </form>

    <hr style="border: 2px solid black;">
    <div class="head">
        <center>
            <h3>HASIL PERHITUNGAN</h3>
            <h3>Nilai Akademik <?= $matkul ?></h3>
            <h5>Nama : <?= $nama ?></h5>
            <h5>Nim : <?= $nim ?></h5>
        </center>
    </div>
    <div class="hasil" style="margin-left:38%">
        <table>
            <tr>
                <td width="15%">jumlah kehadiran </td>
                <td>: <?= $hadir ?? "-" ?></td>
                <td width="15%">Nilai Kehadiran </td>
                <td>: <?= $hitung_hadir ?? "-" ?></td>
            </tr>
            <tr>
                <td width="15%">Nilai Tugas </td>
                <td>: <?= $nilai_tugas ?? "-" ?></td>
                <td width="15%">Nilai UTS </td>
                <td>: <?= $nilai_uts ?? "-" ?></td>
            </tr>
            <tr>
                <td width="15%">Nilai UAS </td>
                <td>: <?= $nilai_uas ?? "-" ?></td>
                <td width="15%">Nilai AKHIR </td>
                <td>: <?= $nilai_akhir ?? "-" ?></td>
            </tr>
            <tr>
                <td width="15%">Grade </td>
                <td>: <?= $grade ?? "-" ?></td>
                <td width="15%">Keterangan </td>
                <td>: <?= $keterangan ?? "-" ?></td>
            </tr>
        </table>
    </div>
</body>

</html>