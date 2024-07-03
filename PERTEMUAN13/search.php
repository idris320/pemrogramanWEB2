<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Contoh mencari record berdasarkan field nama</h3>
    <form action="cari1.php" method="post">
        <label>Maukan nama:</label> 
        <input type="text" name="nama"><br><br>
        <label>Maukan nama jurusan:</label> 
        <input type="text" name="jurusan"><br>
        <p><input type="submit"value="Search">
        <input type="reset" value="Hapus"></p>
    </form>
    <hr><br>
    <h4>Menampilkan data dari besar ke kecil</h4>    
    <?php 
    $con=mysqli_connect("localhost","root","","mahasiswa");
    $data = mysqli_query($con, "SELECT * FROM `customer` ORDER BY customerNumber DESC");
    while($d = mysqli_fetch_array($data)){
        ?>

    <?php 
    }
    ?>
</body>
</html>