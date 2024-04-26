<?php
$mystring1 ="Apa kabar";
echo "Jumlahkarakterpada $mystring1 adalah:".strlen($mystring1)."<br>";
//menghitungpanjangstringdalam$mystring
$mystring2="Menghitung panjang string";
echo "Jumlahkarakterpada $mystring2 adalah:".strlen($mystring2) ."<br>";
echo "Jumlahkaraktersemua:";
echo strlen($mystring1)+strlen($mystring2)."<br>";

echo "<br> <br>";

$string ="jangan lelah karena error";
echo strtoupper($string)."<br>";
echo strtoupper("Belajar pemrograman perlu banyak berlatih");

echo "<br> <br>";

$string="LATIHAN FUNGSI STRING";
echo strtolower($string)."<br>";
echo strtolower("MENGUBAH MENJADI HURUF KECIL");

echo "<br> <br>";

$string="selamat mengerjakan tugas";
echo ucwords($string)."<br>";
echo ucfirst("huruf pertama besar");

echo "<br> <br>";

$nama11="Endar Nirmala";
$nama12="Haiap akabar";
$nama13="Selamat datang";
echo trim($nama11)."<br>";
echo ltrim($nama12)."<br>";
echo rtrim($nama13)."<br>";

echo "<br> <br>";

$string1="Belajar PHP Menyenangkan";
$sub_string1=substr($string1,8);
$sub_string2=substr($string1,3,10);
echo $sub_string1."<br>";
echo $sub_string2."<br>";
$string3="6734569";
$sub_string3=substr($string3,3);
echo $sub_string3."<br>";

echo "<br> <br>";


$string="This is nice today";
echo strlen($string)."<br>";//panjangstring
echo substr_count($string,"nice")."<br>";
echo substr_count($string,"is",2)."<br>";
echo substr_count($string,"is",3)."<br>";
echo substr_count($string,"is",3,3)."<br>";

echo "<br> <br>";

//fungsi date
echo "Sekarang tanggal : ";
echo date('d-F-Y');
echo "<br>dan jam : ";
echo date('h:i:sA');

echo "<br> <br>";

$skrg =getdate();
$bulan1=$skrg['month'];
$hari1=$skrg['mday'];
$tahun1=$skrg['year'];
$jam1=$skrg['hours'];
if($jam1 <=11){
 echo"Selamat Pagi";
}elseif($jam1 >11and $jam1 <=15){
 echo"Selamat Siang";
}elseif($jam1 >15and $jam1 <=18){
 echo"Selamat Sore";
}elseif($jam1 >18){
 echo"Selamat Malam";
}


?>