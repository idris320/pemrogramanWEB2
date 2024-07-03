<?php
echo
"<html>
<body>";
$koneksi=mysqli_connect("localhost","root","","mahasiswa");
//mysql_select_db("lat_dbase");
$cari=$_POST['nama'];
$jur = $_POST['jurusan'];
$hasil=mysqli_query($koneksi,"select * from mahasiswa where nama like '%$cari%' AND jurusan like '%$jur%' order by nama asc");
?>
<a href="search.php">Kembali</a>
    <table border="2">
        <tr>
        <th>NIM</th>
        <th>nama</th>
        <th>alamat</th>
        <th>jurusan</th>
        </tr>
<?php 
While($data=mysqli_fetch_array($hasil)){
    echo"<tr>
        <td>".$data['nim']."</td>
        <td>".$data['nama']."</td>
        <td>".$data['alamat']."</td>
        <td>".$data['jurusan']."</td>
        </tr>";
    }
?>
</body>
</html>