<?php
require "koneksi.php";
$del = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM member WHERE id_member=$del");

header('location:index.php');
?>