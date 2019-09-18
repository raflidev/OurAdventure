<?php
require 'vendor/autoload.php';
include "koneksi.php";
$tgl= date("Y-m-d");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// sheet peratama
$sheet->setTitle('Sheet 1');
$sheet->setCellValue('A1', 'id member');
$sheet->setCellValue('B1', 'money');
$sheet->setCellValue('C1', 'time');

$sheet->setCellValue('E1', 'id member');
$sheet->setCellValue('F1', 'name');

// membaca data dari mysql
$money = mysqli_query($koneksi,"select * from moneybox");
$row = 3;
while($record = mysqli_fetch_array($money))
{
    $sheet->setCellValue('A'.$row, $record['id_member']);
    $sheet->setCellValue('B'.$row, $record['money']);
    $sheet->setCellValue('C'.$row, $record['time']);
    $row++;

}
$member = mysqli_query($koneksi,"select * from member");
$row = 3;
while($record = mysqli_fetch_array($member))
{
    $sheet->setCellValue('E'.$row, $record['id_member']);
    $sheet->setCellValue('F'.$row, $record['name_member']);
    $row++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('./backup/backup-'.$tgl.'.xlsx');

header('location:check.php')
?>