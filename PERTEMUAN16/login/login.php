<?php
//staticvariabel
$user='admin';
$pass=md5('admin');
//memulaisession
session_start();
//ceklogin
if(isset($_COOKIE['login'])){
    if($_COOKIE['login']==$user){
        //jikavalid,setsessionlogin
        $_SESSION['login']=TRUE;
        header('location:home.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <form action="aksi.php" method="post">
        <p><label for="username">Username:</label>
        <input type="text" name="username"/></p>    
        <p><label for="password">Password:</label>
        <input type="password" name="password"/></p>
        <p><label for="remember"><input type="checkbox" name="remember" value="true"/>RememberMe</label></p>
        <p>
            <button type="submit" name="login">Login</button>
            <button type="reset" name="reset">Reset</button>
        </p>
    </form>
</body>
</html>