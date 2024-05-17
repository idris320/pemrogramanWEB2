<?php 
include "../db_koneksi.php";

$id_berita = $_POST['id_berita'];
$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$isi_berita = $_POST['isi_berita'];
$penulis = $_POST['penulis'];
$tgl_publish = $_POST['tgl_publish'];

mysqli_query($conn,"UPDATE `tbl_berita` SET `id_kategori`='$id_kategori',`judul_berita`='$judul_berita',`isi_berita`='$isi_berita',`penulis`='$penulis',`tgl_publish`='$tgl_publish' WHERE id_berita='$id_berita'");


if (mysqli_affected_rows($conn) > 0) {
    // Successful insertion
    echo "<script>alert('Data Berhasil di Ubah!'); window.location.href='../index.php';</script>";
} else {
    // Failed insertion
    echo "<script>alert('Gagal di Ubah!'); window.location.href='../index.php';</script>";
}
?>