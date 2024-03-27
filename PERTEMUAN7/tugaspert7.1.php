<?php
session_start();
function menu($menu){
    if($menu == '1'){
        return include 'hitungNilai.php';
    }elseif($menu == '2'){
        return include 'switchCase.php';
    }elseif($menu == '3'){
        return include 'bilanganGenap.php';
    }elseif($menu == '4'){
        return include 'perkalian.php';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<!-- Form input untuk memilih menu -->
<form method="post" action="">
    Materi Pemrograman PHP<br>
    [1] Penggunaan IF<br>
    [2] Penggunaan SWITCH..CASE<br>
    [3] Penggunaan Looping<br>
    [4] Penggunaan Array<br>
    Pilih Materi yang ingin anda pelajari : <input type="text" name="menu" required><br>
    <input type="submit" name="pilih" value="Pilih">
    <input type="submit" name="reset" value="reset">
</form>

<?php
// Memproses input dari pengguna
if(isset($_POST['pilih'])) {
    $_SESSION['menu'] = $_POST['menu'];
    menu($_POST['menu']);
}else{
    if(!empty($_SESSION['menu'])){
        menu($_SESSION['menu']);
    }
}

if(isset($_POST['reset'])){
    session_destroy();
}
;
?>

</body>
</html>
