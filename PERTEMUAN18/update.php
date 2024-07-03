<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_pasien WHERE id = $id";
    $result = $conn->query($sql);
    $patient = $result->fetch_assoc();
} else {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tb_pasien SET nama='$nama', umur='$umur', alamat='$alamat' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pasien</title>
</head>
<body>
    <h1>Edit Pasien</h1>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($patient['nama']); ?>" required><br><br>
        
        <label for="umur">Umur:</label><br>
        <input type="number" id="umur" name="umur" value="<?php echo htmlspecialchars($patient['umur']); ?>" required><br><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars($patient['alamat']); ?>" required><br><br>
        
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali ke Daftar Pasien</a>
</body>
</html>
