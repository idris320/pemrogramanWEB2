<?php 
include "../db_koneksi.php";

$id_berita = $_POST['id_berita'];

mysqli_query($conn, "DELETE FROM tbl_berita WHERE id_berita='$id_berita'");

if (mysqli_affected_rows($conn) > 0) {    
    echo "<script>alert('Berhasil di Hapus!'); window.location.href='../index.php';</script>";
} else {    
    echo "<script>alert('Gagal di Hapus!'); window.location.href='../index.php';</script>";
}
?>