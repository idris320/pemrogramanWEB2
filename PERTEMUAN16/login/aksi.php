<?php
//staticvariabel
$user='admin';
$pass=md5('admin');
//memulaisession
session_start();
//tampungdatadariform
$username=$_POST['username'];
$password=$_POST['password'];
//ceklogin
if($username == $user && MD5($password) == $pass){
    //setsession
    $_SESSION['login']=TRUE;
    //cekremember me
    if(isset($_POST['remember'])){
        //setwaktusaatini
        $time=time();
        //setcookie
        setcookie('login',$user,$time+3600);
    }
    //redirectkehalamanutama
    header('location:home.php');
    exit();
}else{
    header('location:login.php');
}
?>