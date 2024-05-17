<?php 
include "../db_koneksi.php";

$id = $_POST['id_kategori'];

mysqli_query($conn, "DELETE FROM tbl_kategori WHERE id_kategori='$id'");
if (mysqli_affected_rows($conn) > 0) {
    
    echo "<script>alert('Gagal di Hapus!'); window.location.href='../index.php';</script>";
} else {    
    echo "<script>alert('Berhasil di Hapus!'); window.location.href='../index.php';</script>";
}
?>