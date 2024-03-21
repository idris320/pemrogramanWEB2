<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara 1</title>
</head>
<body>
    <h2>Hitung Luas Segitiga</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Alas</th>
                <th>Tinggi</th>
                <th>Luas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mendefinisikan data alas dan tinggi dalam array secara langsung
            $dataSegitiga = array(
                array('alas' => 5, 'tinggi' => 8),
                array('alas' => 7, 'tinggi' => 10),
                array('alas' => 6, 'tinggi' => 12),
                array('alas' => 9, 'tinggi' => 15),
                array('alas' => 8, 'tinggi' => 11)
            );

            // Menghitung luas segitiga dan menampilkannya dalam tabel
            foreach ($dataSegitiga as $index => $segitiga) {
                $luas = 0.5 * $segitiga['alas'] * $segitiga['tinggi'];
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td>" . $segitiga['alas'] . "</td>";
                echo "<td>" . $segitiga['tinggi'] . "</td>";
                echo "<td>" . $luas . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
