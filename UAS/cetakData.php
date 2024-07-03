<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}

include 'config.php';

// Proses pencarian
$search = '';
if (isset($_POST['search'])) {
    $search = $_POST['search'];
}

// Query untuk mengambil data pasien
$sql = "SELECT * FROM point";
if ($search != '') {
    $sql .= " WHERE tim LIKE '%$search%' OR menang LIKE '%$search%' OR kalah LIKE '%$search%'";
}
$result = $conn->query($sql);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Data Point</title>
        <link rel="icon" href="../img/logo.png">

    </head>

    <style type="text/css">
        body {
            background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url("../img/logo.png") no-repeat;
            background-position: 320px 150px;
            font-family: Arial;
        }

        table {
            border-collapse: collapse;
        }

        @media print {
            body {
                background-position: 100px 150px;
                -webkit-print-color-adjust: exact;
            }

            .no-print {
                display: none;
            }
        }

        .btn-print {
            border: 1px solid #cecece;
            border-radius: 3px;
            padding: 3px 10px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            color: white;
            background-color: #1cc88a;
            font-size: large;
        }

        .btn-print:hover {
            border: 1px solid #b1b1b1;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>


    <body>
        <center>
            <img src="logo-unpam.png" width="150px" alt="">
            <h3>LAPORAN DATA POINT <br> KLASEMEN EROPA UEFA 2024</h3>
        </center>

        <table border="1" cellpadding="4" cellspacing="0" width="100%">
         <tr>            
            <th>Tim</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>            
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>                
                <td><?php echo htmlspecialchars($row['tim']); ?></td>
                <td><?php echo htmlspecialchars($row['menang']); ?></td>
                <td><?php echo htmlspecialchars($row['seri']); ?></td>
                <td><?php echo htmlspecialchars($row['kalah']); ?></td>
                <td><?php echo htmlspecialchars($row['poin']); ?></td>                
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Tidak ada data ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>
        <br><br><br>

        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>JL.Puspitek, Buaran, Kec. Pamulang, <?= date("Y-m-d"); ?> <br><br>
                        Administrator</p>
                    <br><br><br>
                    <p style="margin-left: 100px; margin-buttom:0px;"><?= $_SESSION['username']?></p>
                    <p>_________________________________</p>
                </td>
            </tr>
        </table>

        <button href="#" align="center" class="no-print btn-print" onclick="window.print();">
            Cetak / Print
        </button>
        <a href="index.php" class="no-print btn-print">Kembali</a>
    </body>

    </html>


