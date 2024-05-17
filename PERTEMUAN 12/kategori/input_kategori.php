<?php
include "../db_koneksi.php";

$nama = $_POST['namaKategori'];

mysqli_query($conn,"INSERT INTO `tbl_kategori`(`nama_kategori`) VALUES ('$nama');");


if (mysqli_affected_rows($conn) > 0) {
    // Successful insertion
    echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='../index.php';</script>";
} else {
    // Failed insertion
    echo "<script>alert('Gagal menambahkan data!'); window.location.href='../index.php';</script>";
}
?>