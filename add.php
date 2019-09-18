<?php
require 'koneksi.php';
if(isset($_POST['submitmember'])){
    $name = $_POST['nama'];
    $sql = "INSERT INTO member VALUES ('','$name')";
    
}else if(isset($_POST['submitmoney'])){
    date_default_timezone_set('Asia/Jakarta');
    $name = $_POST['name'];
    $money = $_POST['money'];
    $tgl = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO moneybox VALUES ('','$name','$money','$tgl')";
} else if(isset($_POST['submittarik'])){
    date_default_timezone_set('Asia/Jakarta');
    $name = $_POST['name'];
    $money = $_POST['money'];
    $tgl = date('Y-m-d H:i:s');
    $tarik = "-$money";
    
    $sql = "INSERT INTO moneybox VALUES ('','$name','$tarik','$tgl')";
}
mysqli_query($koneksi, $sql);
header('location:index.php');
?>