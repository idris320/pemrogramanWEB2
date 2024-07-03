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
$sql = "SELECT * FROM tb_pasien";
if ($search != '') {
    $sql .= " WHERE nama LIKE '%$search%' OR umur LIKE '%$search%' OR alamat LIKE '%$search%'";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pasien</title>
</head>
<body>
    <h1>Daftar Pasien | <?= $_SESSION['username']?></h1>
    
    <!-- Formulir Pencarian -->
    <form method="post">
        <input type="text" name="search" placeholder="Cari pasien..." value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Cari</button>
    </form>
    <br>

    <a href="create.php">Tambah Pasien</a> | <a href="cetakData.php">Cetak Data</a> | <a href="auth/logout.php">Logout</a> <br><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nama']); ?></td>
                <td><?php echo htmlspecialchars($row['umur']); ?></td>
                <td><?php echo htmlspecialchars($row['alamat']); ?></td>
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
</body>
</html>

<?php $conn->close(); ?>
