<?php
if(isset($_COOKIE['username'])){
    echo"<h1>Cookie 'username' ada Isinya:".
    $_COOKIE['username'];
}else{
    echo"<h1>Cookie 'username' TIDAK ada.</h1>";
}


if(isset($_COOKIE['namalengkap'])){
    echo"<h1>Cookie 'nama lengkap'ada.Isinya:".
    $_COOKIE['namalengkap'];
}else{
    echo"<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}
echo"<h2>Klik <a href='buat_cookie.php'> disini </a>untuk penciptaan cookies</h2>";
echo"<h2>Klik <a href='ubah_cookie.php'> disini </a>untuk ubah cookies</h2>";
echo"<h2>Klik <a href='hapus_cookie.php'> disini </a>untuk penghapusan cookies</h2>";
?>