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