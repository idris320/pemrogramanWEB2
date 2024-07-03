<?php 
include "koneksi.php";
//menampungdatayangdikirimoleh form
echo $kode=$_POST['kode'];
echo $jumlah=$_POST['jumlah'];
//menginputdatakedatabase
mysqli_query($con,"call update_datatable('$kode','$jumlah')");
//mengalihkanhalamankembalikeindex.php
header("location:form.php");
?>
?>