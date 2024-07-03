<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM point WHERE id = $id";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
} else {
    header('Location: index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tim = $_POST['tim'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $poin = $_POST['poin'];

    $sql = "UPDATE point SET tim ='$tim', menang='$menang', seri='$seri', kalah='$kalah', poin='$poin' WHERE id='$id'";
    
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
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="post">
        <label for="tim">Tim:</label><br>
        <select name="tim" id="tim">
            <option value="<?= $data['tim']?>"><?= $data['tim']?></option>
            <option value="Spanyol">Spanyol</option>
            <option value="Italia">Italia</option>
            <option value="Kroasia">Kroasia</option>
            <option value="Albania">Albania</option>
        </select><br><br>
        
        <label for="menang">Menang:</label><br>
        <input type="number" id="menang" name="menang" value="<?= $data['menang']?>" required><br><br>
        
        <label for="seri">Seri:</label><br>
        <input type="number" id="seri" name="seri" value="<?= $data['seri']?>" required><br><br>

        <label for="kalah">Kalah:</label><br>
        <input type="number" id="kalah" name="kalah" value="<?= $data['kalah']?>" required><br><br>

        <label for="poin">Poin:</label><br>
        <input type="number" id="poin" name="poin" value="<?= $data['poin']?>" required><br><br>
        
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali ke Data</a>
</body>
</html>