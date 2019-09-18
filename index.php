<?php include "templates/header.php"; 
include "koneksi.php";

if(isset($_POST['tambahmoney'])){?>
<section class="border m-3 p-4" id='addmoney'>
      <form action='add.php' method='post'>
  <div class="form-row">
    <div class="col-6">
    <label>Nama</label>
      <select class='form-control' name="name">
      <?php
      $sql = "SELECT * FROM member";
      $query = mysqli_query($koneksi, $sql);
      while($row = mysqli_fetch_array($query)){
      ?>
      <option value="<?= $row['id_member'] ?>"><?= $row['name_member'] ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="col-6">
    <label>Money</label>
    <input class='form-control' type="text" name="money" placeholder='Enter money for saving'>
    </div>
  </div>
  <button name='submitmoney' class='btn btn-dark my-2'>Tambah</button>
</form>
</section>
<?php }

if(isset($_POST['tarikmoney'])){?>
<section class="border m-3 p-4" id='pullmoney'>
      <form action='add.php' method='post'>
  <div class="form-row">
    <div class="col-6">
    <label>Nama</label>
      <select class='form-control' name="name">
      <?php
      $sql = "SELECT * FROM member";
      $query = mysqli_query($koneksi, $sql);
      while($row = mysqli_fetch_array($query)){
      ?>
      <option value="<?= $row['id_member'] ?>"><?= $row['name_member'] ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="col-6">
    <label>Money</label>
    <input class='form-control' type="text" name="money" placeholder='Request pull your money back'>
    </div>
  </div>
  <button name='submittarik' class='btn btn-dark my-2'>Tarik</button>
</form>
</section>
<?php }

if(isset($_POST['tambahmember'])){?>
<section class="border m-3 p-4" id='addmember'>
<form action='add.php' method='post'>
  <div class="form-row">
    <div class="col-6">
    <label>Nama</label>
      <input name='nama' type="text" class="form-control" placeholder="Nama member">
  <button name='submitmember' class='btn btn-dark my-2'>Tambah</button>
    </div>
    <div class="col-6 border">
    Aturan dan Syarat :<br>
    - Mengikhlaskan uang jika pengurus mendapatkan musibah yg tidak diinginkan. <br>
    - Uang tidak diberi Bunga satu persen pun. <br>
    - Boleh mengambil uang kapan saja, refund 1 hari setelahnya. <br>
    - Peserta wajib menaati peraturan yang dibuat.
    </div>
  </div>
</form>
</section>
<?php }

if(isset($_GET['detail'])){
  $id = $_GET['detail'];
  $sql = "SELECT * FROM moneybox INNER JOIN member
        ON moneybox.id_member = member.id_member where member.id_member=$id";
$query = mysqli_query($koneksi, $sql);
$total = mysqli_query($koneksi, "SELECT sum(money) FROM moneybox where id_member=$id");
$r= mysqli_fetch_row($total);

  ?>

  <section class="border m-3 p-4" id='detail'>
  <form action="" method="post">
  <button name='member' class='btn btn-dark my-2'>< Back</button>
  <a class="btn btn-dark my-2" href="index.php">Home</a>
  </form>
  
  <?php if(empty($row= mysqli_fetch_array($query))){?>
  <h3>Data tabungan belum ada</h3>
  <?php }else{ ?>
  <h3>Detail Member</h3>
  <table class='table table-bordered text-white'>
  <thead>
  <tr>
  <th>Nama</th>
  <th>Total Tabungan</th>
  </tr>
  </thead>
  <tbody>
  <td><?= $row['name_member'] ?></td>
  <td>Rp.<?= number_format($r[0]) ?></td>
  </tbody>
  </table>
  <table class='table table-bordered text-white'>
  <thead>
  <tr>
  <th>No</th>
  <th>Money</th>
  <th>Time</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $no = 1;
  $sql = "SELECT * FROM moneybox INNER JOIN member
          ON moneybox.id_member = member.id_member where member.id_member=$id order by moneybox.id_moneybox DESC";
  $query = mysqli_query($koneksi, $sql);
  while($row = mysqli_fetch_array($query)){
  ?>
  <tr width="100">
  <td ><?= $no++ ?></td>
  <td>Rp.<?= number_format($row['money']); ?></td>
  <td><?= $row['time'] ?></td>
  </tr>
  <?php } ?>
  </tbody>
  </table>
  <?php } ?>
  </section>

<?php } 
?>


<section id='konten'>
    <div class="row justify-content-center m-3 ">
    <div class="col-lg-10 border border-white p-4 ">
        <?php 
           if(isset($_POST['moneybox'])){
             include "moneybox.php";
           } else if(isset($_POST['member'])){
             include "member.php";
            } else if(isset($_POST['plan'])){
              include "plan.php";
            } else if(empty($_POST)) {
              include "home.php";
            } else if(isset($_POST['home'])){
              include "home.php";
            } else if(isset($_POST['tambahmoney'])){
              include "moneybox.php";
            } else if(isset($_POST['tambahmember'])){
              include "member.php";
            }
            
            ?>
            
            </table>
    </div>

    <div class="col-lg-2 border border-white  p-4">
    <h3>Last saving</h3>
    <?php
    $sql = "SELECT * FROM moneybox INNER JOIN member
    ON moneybox.id_member = member.id_member order by moneybox.id_moneybox DESC LIMIT 3";
    $query = mysqli_query($koneksi, $sql);
    while($row = mysqli_fetch_array($query)){
      ?>
    <div class="card bg-dark mt-4 p-3">
    <h5 class="card-title"><?= $row['name_member']?><br>Rp.<?= number_format($row['money'])?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $row['time'] ?></h6>
</div>
    <?php } ?>
    </div>

    </div>
</section>
      <?php include "templates/footer.php"; ?>
