<div class="container">
  <form action="<?php echo base_url().'perizinan/prosesdaftar' ?>" method="post" >
    <div class="form-group">
      <label for="nik">NIK</label>
      <input type="text" class="form-control" name="nik">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label for="nim">mobil tahun:</label>
      <input type="text" class="form-control" name="tahun">
    </div>
    <div class="form-group">
      <label for="nama">tipe mobil:</label>
      <input type="text" class="form-control" name="tipe">
    </div>
    <div class="form-group">
      <label for="alamat">nopol:</label>
      <input type="text" class="form-control" name="nopol">
    </div>
      <!-- <input type="text" name="user" value="<?php echo $this->session->userdata("id_user"); ?>" > -->
      <!-- <input type="text" class="form-control" name="alamat" hidden=""> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <?php echo $this->session->userdata("id_user"); ?>
</div>