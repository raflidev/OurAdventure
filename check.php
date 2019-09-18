<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Atomic+Age|Geostar&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/font-awesome/css/all.css">
    <link rel="stylesheet" href="asset/css/font.css">


    <style>
    #title{
        font-family: 'Geostar', cursive;
    }
    body{
        background-color: black;
        color:white;
        font-family: 'Atomic Age', cursive;
    }

    </style>
<section id='konten'  class="border border-white p-3  m-5">
<a class='btn btn-dark ' href="index.php">< Kembali</a>
<h3 class='my-3'>Check Backup</h3>
<?php
$dir = 'backup/';
$files = scandir($dir, 0);
for($i = 2; $i < count($files); $i++)
print "<u><a href=backup/$files[$i]>$files[$i]</a></u>";
?>
</section>

