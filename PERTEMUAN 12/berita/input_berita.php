<?php 
include "../db_koneksi.php";

// $data = array(
//     "id_kategori" => $_POST['id_kategori'],
//     "judul_berita" => $_POST['judul_berita'],
//     "isi_berita" => $_POST['isi_berita'],
//     "penulis" => $_POST['penulis'],
//     "tgl_publish" => $_POST['tgl_publish']
// );


$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$isi_berita = $_POST['isi_berita'];
$penulis = $_POST['penulis'];
$tgl_publish = $_POST['tgl_publish'];

// var_dump($id_kategori, $judul_berita, $isi_berita, $penulis, $tgl_publish);

mysqli_query($conn, "INSERT INTO tbl_berita (`id_kategori`, `judul_berita`, `isi_berita`, `penulis`, `tgl_publish`) VALUES('$id_kategori', '$judul_berita', '$isi_berita', '$penulis', '$tgl_publish')");

if (mysqli_affected_rows($conn) > 0) {
    // Successful insertion
    echo "<script>alert('Data Berhasil di Tambahkan!'); window.location.href='../index.php';</script>";
} else {
    // Failed insertion
    echo "<script>alert('Gagal di Tambahkan!'); window.location.href='../index.php';</script>";
}

?>