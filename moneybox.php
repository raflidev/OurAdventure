<h1>Moneybox</h1>
<form  method="post">
<button name='tambahmoney' class='btn btn-dark px-3 my-3'>Tambah</button>
<button name='tarikmoney' class='btn btn-dark px-3 my-3'>Tarik</button>
<a href="backup.php" class='btn btn-dark px-3 my-3'>Make a Backup!</a>
</form>
<?php
    $query = mysqli_query($koneksi, "SELECT sum(money) FROM moneybox");
    $row= mysqli_fetch_row($query);
?>
<table class='table table-bordered text-white'>
<thead>
<tr>
<th>Total Keseluruhan</th>
<th>Rp.<?= number_format($row[0]) ?></th>
</tr>
</thead>
</table>
<table class='table table-bordered text-white'>
<thead>
<tr>
<th>No</th>
<th>Member Name</th>
<th>Money</th>
<th>Time</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
$sql = "SELECT * FROM moneybox INNER JOIN member
        ON moneybox.id_member = member.id_member order by moneybox.id_moneybox DESC";
$query = mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($query)){
?>
<tr width="100">
<td ><?= $no++ ?></td>
<td><?= $row['name_member'] ?></td>
<td>Rp.<?= number_format($row['money']); ?></td>
<td><?= $row['time'] ?></td>
</tr>
<?php } ?>
</tbody>
</table>