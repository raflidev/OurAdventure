<h1>Member</h1>
<form  method="post">
<button name='tambahmember' class='btn btn-dark px-3 my-3'>Tambah</button>
</form>
<?php
if(isset($_POST['detail'])){
        include ("detail.php");
    }
    $query = mysqli_query($koneksi, "SELECT COUNT(id_member) FROM member");
    $row= mysqli_fetch_row($query);
?>
<table class='table table-bordered text-white'>
<thead>
<tr>
<th>Total Member</th>
<th><?= number_format($row[0]) ?></th>
</tr>
</thead>
</table>
<table class='table table-bordered text-white'>
<thead>
<tr>
<th>No</th>
<th>Member Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
$sql = "SELECT * FROM member order by name_member ASC";
$query = mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($query)){
?>
<tr>
<td ><?= $no++ ?></td>
<td><?= $row['name_member'] ?></td>
<td>
<a class='text-danger' href="delete.php?id=<?=$row['id_member']?>">Delete</a> |
<a class='text-warning' href="index.php?detail=<?=$row['id_member']?>">Detail</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>