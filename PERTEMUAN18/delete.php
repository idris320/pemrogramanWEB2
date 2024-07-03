<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_pasien WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Berhasil Dihapus")</script>';
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
