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
    <title>Data Grup B - point bola</title>
</head>
<body>
    <center>
    <h1>Data Group B</h1>
    <h2>Per <?php 
     date_default_timezone_set('Asia/Jakarta');
     echo date("d M Y"); echo " "; echo date("H:i:s");
     ?> <br>
     NIM 211011401073</h2>

    <h1>Data Point Bola | UAS - <?= $_SESSION['username']?></h1>
    
    <!-- Formulir Pencarian -->
    <form method="post">
        <input type="text" name="search" placeholder="Cari Data..." value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Cari</button>
    </form>
    <br>

    <a href="create.php">Tambah Data</a> | <a href="cetakData.php">Cetak Data</a> | <a href="auth/logout.php">Logout</a> <br><br>
    <table border="1">
        <tr>            
            <th>Tim</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>                
                <td><?php echo htmlspecialchars($row['tim']); ?></td>
                <td><?php echo htmlspecialchars($row['menang']); ?></td>
                <td><?php echo htmlspecialchars($row['seri']); ?></td>
                <td><?php echo htmlspecialchars($row['kalah']); ?></td>
                <td><?php echo htmlspecialchars($row['poin']); ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pasien ini?');">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Tidak ada data ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>
    </center>
</body>
</html>
<?php $conn->close(); ?>