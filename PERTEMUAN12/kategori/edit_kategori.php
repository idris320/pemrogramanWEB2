<?php
include "../db_koneksi.php";

$id = $_POST['id_kategori'];
$nama = $_POST['namaKategori'];

mysqli_query($conn, "UPDATE `tbl_kategori` SET `nama_kategori`='$nama' WHERE id_kategori='$id'");
if (mysqli_affected_rows($conn) > 0) {
    // Successful insertion
    echo "<script>alert('Data Berhasil di Ubah!'); window.location.href='../index.php';</script>";
} else {
    // Failed insertion
    echo "<script>alert('Gagal di Ubah!'); window.location.href='../index.php';</script>";
}
?>