<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Member.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

$data = [
    $username,
    $password
];

$model = new Member();
$rs = $model->cekLogin($data); //cekLogin ini diarahkan ke models/Member.php 
if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('Location:index.php?url=product');
}
else {
    echo '<script> Alert("user/password anda salah"); history.back();</script>';
}

?>